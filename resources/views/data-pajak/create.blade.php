<div class="modal modal-lg fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Wajib Pajak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('index.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="npwpd" class="form-label">NPWPD</label>
                        <input type="text" class="form-control" name="npwpd" id="npwpd"
                            aria-describedby="NPWPD" placeholder="NPWPD" required>
                    </div>
                    <div class="form-group">
                        <label for="namausaha" class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" name="namausaha" id="namausaha"
                            aria-describedby="namausaha" placeholder="Nama Usaha" required>
                    </div>
                    <div class="form-group">
                        <label for="jenisusaha" class="form-label">Jenis Usaha</label>
                        <input type="text" class="form-control" name="jenisusaha" id="jenisusaha"
                            aria-describedby="jenisusaha" placeholder="Jenis Usaha" required>
                    </div>
                    <div class="form-group">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="latitude"
                            aria-describedby="latitude" placeholder="Latitude" readonly>
                    </div>
                    <div class="form-group">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="longitude"
                            aria-describedby="longitude" placeholder="Longitude" readonly>
                    </div>

                    <div id="map" style="height: 400px;"></div>

                    <div class="form-group">
                        <label for="jenispendapatan" class="form-label">Jenis Pendapatan</label>
                        <select name="jenispendapatan" id="jenispendapatan" class="form-control" required>
                            <option value="" disabled selected>Pilih Jenis Pendapatan</option>
                            <option value="Penggantian atau Imbalan">Penggantian atau Imbalan</option>
                            <option value="Hadiah">Hadiah</option>
                            <option value="Laba Usaha">Laba Usaha</option>
                            <option value="Keuntungan Penjualan">Keuntungan Penjualan</option>
                            <option value="Penerimaan Kembali">Penerimaan Kembali</option>
                            <option value="Bunga">Bunga</option>
                            <option value="Dividen">Dividen</option>
                            <option value="Royalti">Royalti</option>
                            <option value="Sewa">Sewa</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                                                                <label for="" class="mb-3">Alamat Usaha</label>
                                                                <input type="text" class="form-control mb-1" name="latitude" id="latitude" 
                                                                    aria-describedby="latitude" placeholder="Latitude (Filled Automatically)" readonly required>
                                                                <input type="text" class="form-control mt-1" name="longtitude" id="longtitude" 
                                                                    aria-describedby="longtitude" placeholder="Longtitude (Filled Automatically)" readonly required>
                                                            </div> --}}
                    <div class="form-group">
                        <label for="teleponusaha" class="form-label">Telepon Usaha</label>
                        <input type="number" class="form-control" name="teleponusaha" id="teleponusaha"
                            aria-describedby="teleponusaha" placeholder="No Telp Usaha" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalpendaftaran" class="form-label">Tanggal Pendaftaran</label>
                        <input type="date" class="form-control vanila-datepicker" name="tanggalpendaftaran"
                            id="tanggalpendaftaran" aria-describedby="tanggalpendaftaran" required>
                    </div>
                    <div class="form-group">
                        <label for="namapemilik" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="namapemilik" id="namapemilik"
                            aria-describedby="namapemilik" placeholder="Nama Pemilik" required>
                    </div>
                    <div class="form-group">
                        <label for="nikpemilik" class="form-label">NIK Pemilik</label>
                        <input type="number" class="form-control" name="nikpemilik" id="nikpemilik"
                            aria-describedby="nikpemilik" placeholder="NIK Pemilik" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatanpemilik" class="form-label">Jabatan Pemilik</label>
                        <input type="text" class="form-control" name="jabatanpemilik" id="jabatanpemilik"
                            aria-describedby="jabatanpemilik" placeholder="Jabatan Pemilik" required>
                    </div>
                    <div class="form-group">
                        <label for="alamatpemilik" class="form-label">Alamat Pemilik</label>
                        <textarea class="form-control" name="alamatpemilik" id="alamatpemilik" aria-describedby="alamatpemilik"
                            placeholder="Alamat Pemilik" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="teleponpemilik" class="form-label">Telepon Pemilik</label>
                        <input type="text" class="form-control" name="teleponpemilik" id="teleponpemilik"
                            aria-describedby="teleponpemilik" placeholder="No Telp Pemilik" required>
                    </div>
                    <div class="text-start mt-2">
                        <button type="submit" class="btn btn-primary btn-save-tambah">Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
