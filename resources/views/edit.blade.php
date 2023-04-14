<x-app-layout>
<div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-auto dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("FORM PENGAJUAN SURAT OBSERVASI") }}
                    <hr />
                    <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <!-- <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div> -->
                    <div class="card-body">
                      <form action="/data/{{ $suratlist->id}}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"   name="nama" id='nama' value="{{ $suratlist->nama}}"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">NPM</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              name="npm"
                              id='npm'
                              value="{{ $suratlist->npm}}"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Kelas</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="kelas"
                                class="form-control"
                                placeholder="Example:TI2D"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                                name="kelas"
                                value="{{ $suratlist->kelas}}"
                                required
                              />
                              <!-- <span class="input-group-text" id="basic-default-email2">@example.com</span> -->
                            </div>
                            <!-- <div class="form-text">You can use letters, numbers & periods</div> -->
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Prodi</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="prodi"
                              class="form-control phone-mask"
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                              name="prodi"
                              value="{{ $suratlist->prodi}}"
                              required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Judul TA</label>
                          <div class="col-sm-10">
                            <input
                              id="judul"
                              class="form-control"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                              name="judul"
                              value="{{ $suratlist->judul}}"
                                required
                            ></input>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Ditujukan</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="ditujukan"
                              class="form-control phone-mask"
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                              name="ditujukan"
                              value="{{ $suratlist->ditujukan}}"
                                required
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Tempat</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              id="tempat"
                              class="form-control phone-mask"
                              aria-label="658 799 8941"
                              aria-describedby="basic-default-phone"
                              name="tempat"
                              value="{{ $suratlist->tempat}}"
                                required
                            />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button  type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </div>
    </x-app-layout>