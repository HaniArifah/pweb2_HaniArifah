<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <!-- <div class="py-1"> -->
        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                <p class="text-lg">Selamat kamu telah berhasil login!</p>
                </div> -->
            <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Selamat kamu berhasil login!") }}
                </div>
            </div> -->
        <!-- </div>
    </div> -->

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-auto dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DATA PENGAJUAN SURAT OBSERVASI") }}
                    <a href="/forms " class="btn btn-primary ">+ Tambah</a>
                    <hr />
                    <!-- Responsive Table -->
              <div class="card">
                <!-- <h5 class="card-header">Responsive Table</h5> -->
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                      <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Prodi</th>
                        <th>Judul TA</th>
                        <th>Ditujukan</th>
                        <th>Tempat</th>
                        @if (Auth::user()->level=='Admin')
                        <th>Aksi</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($suratlist as $observasi)
                      <tr>
                        <td class="align-middle">{{ $loop->iteration}}</td>
                        <td class="align-middle">{{ $observasi->nama}}</td>
                        <td class="align-middle">{{ $observasi->npm}}</td>
                        <td class="align-middle">{{ $observasi->kelas}}</td>
                        <td class="align-middle">{{ $observasi->prodi}}</td>
                        <td class="align-middle">{{ $observasi->judul}}</td>
                        <td class="align-middle">{{ $observasi->ditujukan}}</td>
                        <td class="align-middle">{{ $observasi->tempat}}</td>
                        <td>
                          @if (Auth::user()->level=='Admin')
                            <div>
                                <!-- <button type="button" class="btn btn-secondary">Detail</button> -->
                                <button onclick="window.location.href='data-edit/{{ $observasi->id}}'" type="button" class="btn btn-warning">Edit</button>
                                <form action="data/{{ $observasi->id}}" method="post">
                                  @csrf 
                                  @method('delete')
                                <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                            @else

                            @endif
                        </td>    
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
