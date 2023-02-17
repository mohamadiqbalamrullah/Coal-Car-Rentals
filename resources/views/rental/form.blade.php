<div class="modal fade" id="rentalForm" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-transparent">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-sm-5 mx-50 pb-5">
          <h1 class="text-center mb-1" id="addNewCardTitle">Pengajuan Izin Penggunaan Kendaraan Perusahaan</h1>
          <!-- form -->
          <form id="addNewCardValidation" enctype="multipart/form-data" method="POST" action="{{route ('rental.store')}}" class="row gy-1 gx-2 mt-75">
            @csrf
            <div class="col-12">
              <label class="form-label" for="modalAddCardNumber">Atas Nama Driver</label>
              <div class="input-group input-group-merge">
                <input
                  id="modalAddCardNumber"
                  name="driver"
                  class="form-control add-credit-card-mask"
                  type="text"
                  aria-describedby="modalAddCard2"
                  required
                />
                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                  <span class="add-card-type"></span>
                </span>
              </div>
            </div>
  
            <div class="col-12">
                <label class="form-label" for="modalAddCardNumber">Nomor Kepegawaian</label>
                <div class="input-group input-group-merge">
                  <input
                    id="modalAddCardNumber"
                    name="nip"
                    class="form-control add-credit-card-mask"
                    type="text"
                    aria-describedby="modalAddCard2"
                    required
                  />
                  <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                    <span class="add-card-type"></span>
                  </span>
                </div>
            </div>

            <div class="col-12">
                <label class="form-label" for="modalAddCardNumber">Keperluan</label>
                <div class="input-group input-group-merge">
                  <input
                    id="modalAddCardNumber"
                    name="keperluan"
                    class="form-control add-credit-card-mask"
                    type="text"
                    aria-describedby="modalAddCard2"
                    required
                  />
                  <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                    <span class="add-card-type"></span>
                  </span>
                </div>
             </div>

             <div class="col-12">
                <label class="form-label" for="modalAddCardNumber">Jenis Kendaraan</label>
                <div class="input-group input-group-merge">
                  <input
                    id="modalAddCardNumber"
                    name="jenis_kendaraan"
                    class="form-control add-credit-card-mask"
                    type="text"
                    aria-describedby="modalAddCard2"
                    required
                  />
                  <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                    <span class="add-card-type"></span>
                  </span>
                </div>
             </div>

                <div class="col-12">
                    <label class="form-label" for="modalAddCardNumber">Identitas Kendaraan</label>
                    <div class="input-group input-group-merge">
                      <input
                        id="modalAddCardNumber"
                        name="identitas_kendaraan"
                        class="form-control add-credit-card-mask"
                        type="text"
                        aria-describedby="modalAddCard2"
                        required
                      />
                      <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                        <span class="add-card-type"></span>
                      </span>
                    </div>
                </div>

              <div class="col-12">
                <label class="form-label" for="modalAddCardNumber">Penanggung Jawab</label>
                <div class="input-group input-group-merge">
                  <input
                    id="modalAddCardNumber"
                    name="penanggung_jawab"
                    class="form-control add-credit-card-mask"
                    type="text"
                    aria-describedby="modalAddCard2"
                    required
                  />
                  <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                    <span class="add-card-type"></span>
                  </span>
                </div>
              </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
              <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>