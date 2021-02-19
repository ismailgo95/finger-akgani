<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <?php
                    if (isset($_GET['notif'])) {
                        include 'notif.php';
                    } ?>
                    <!-- general form elements -->
                    <div class="card card-light mt-4">
                        <div class="card-header">
                            <span class="card-title mt-2">
                                <i class="fas fa-bars"></i>
                            </span>
                            <h3 class="card-title mt-2 ml-4 text-lg text-bold"> Data Hadir</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Tanggal</th>
                                        <th>Masuk</th>
                                        <th>Pulang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $Connect = fsockopen(IP_FP, PORT_FP, $errno, $errstr, 1);
                                    if ($Connect) {
                                        $soap_request = "<GetAttLog><ArgComKey xsi:type=\"xsd:integer\">" . COMKEY . "</ArgComKey><Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg></GetAttLog>";
                                        $newLine = "\r\n";
                                        fputs($Connect, "POST /iWsService HTTP/1.0" . $newLine);
                                        fputs($Connect, "Content-Type: text/xml" . $newLine);
                                        fputs($Connect, "Content-Length: " . strlen($soap_request) . $newLine . $newLine);
                                        fputs($Connect, $soap_request . $newLine);
                                        $buffer = "";
                                        while ($Response = fgets($Connect, 1024)) {
                                            $buffer = $buffer . $Response;
                                        }
                                        $buffer = Parse_Data($buffer, "<GetAttLogResponse>", "</GetAttLogResponse>");
                                        $buffer = explode("\r\n", $buffer);
                                        for ($a = 0; $a < count($buffer); $a++) {
                                            $data = Parse_Data($buffer[$a], "<Row>", "</Row>");
                                            $pin = Parse_Data($data, "<PIN>", "</PIN>");
                                            $date = substr(Parse_Data($data, "<DateTime>", "</DateTime>"), 0, 10);

                                            if (empty($pin))
                                                continue;

                                            $status = Parse_Data($data, "<Status>", "</Status>");
                                            $time = substr(Parse_Data($data, "<DateTime>", "</DateTime>"), 11, 8);

                                            if ($status >= 1) {
                                                // Log Pulang
                                                $query = mysqli_query(
                                                    $koneksi,
                                                    "INSERT INTO log_pulang (user_id, tanggal, jam)
                                                     SELECT * FROM (SELECT '$pin' AS user_id, '$date' AS tanggal, '$time' AS jam) AS tmp
                                                     WHERE NOT EXISTS (
                                                        SELECT user_id  FROM log_pulang WHERE tanggal = '$date'
                                                    ) LIMIT 1;"
                                                );
                                            } else {
                                                // Log Masuk
                                                $query = mysqli_query(
                                                    $koneksi,
                                                    "INSERT INTO log_masuk (user_id, tanggal, jam)
                                                     SELECT * FROM (SELECT '$pin' AS user_id, '$date' AS tanggal, '$time' AS jam) AS tmp
                                                     WHERE NOT EXISTS (
                                                        SELECT user_id  FROM log_masuk WHERE tanggal = '$date'
                                                    ) LIMIT 1;"
                                                );
                                            }
                                        }
                                        fclose($Connect);
                                    } else {
                                        echo "Koneksi Gagal";
                                    }

                                    $no = 1;
                                    $query = mysqli_query(
                                        $koneksi,
                                        "SELECT ag.nama, ag.nip, lm.tanggal as tanggal, lm.jam as masuk, lp.jam as pulang FROM anggota ag 
                                        JOIN log_masuk lm ON lm.user_id = ag.id
                                        JOIN log_pulang lp ON lp.user_id = ag.id"
                                    );
                                    while ($data = mysqli_fetch_array($query)) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['nip'] ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['masuk'] ?></td>
                                            <td><?= $data['pulang'] ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>