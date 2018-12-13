<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Data Relawan</h4>
                <p class="category">Data Relawan yang ada di lapangan</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead style="font-size:17px;">
                        <tr><th>Name</th>
                            <th>No. Telepon</th>
                            <th>No. Identitas</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>TTL</th>
                            <th>Agama</th>
                            <th>Action</th>
                        </tr></thead>
                    <tbody>
                    <?php foreach($data_relawan as $relawan) : ?>
                        <tr>
                            <td><?= $relawan['nama_depan'];?> <?= $relawan['nama_belakang'];?></td>
                            <td><?= $relawan['no_telepon'];?></td>
                            <td><?= $relawan['no_identitas'];?></td>
                            <td><?= $relawan['jenis_kelamin'];?></td>
                            <td><?= $relawan['alamat'];?></td>
                            <td><?= $relawan['ttl'];?></td>
                            <td><?= $relawan['agama'];?></td>
                            <td><button class="btn btn-danger">Hapus</button> <button class="btn btn-primary">Hapus</button></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>