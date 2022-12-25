<x-app-layout>
    
<div class="row">
    <div class="col">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 190px;">
                    <div class="list-group list-group-flush border-bottom scrollarea">
                      <a href="/dashboard/daftar" class="list-group-item list-group-item-action py-3 lh-sm {{ ($title==="daftar") ? 'active': '' }}" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <strong class="mb-1">Daftar Pemesan</strong>
                        </div>
                      </a>
                      <a href="/dashboard/checkin" class="list-group-item list-group-item-action py-3 lh-sm {{ ($title==="ci") ? 'active': '' }}" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <strong class="mb-1">Checkin</strong>
                        </div>
                      </a>
                      <a href="/dashboard/laporan" class="list-group-item list-group-item-action py-3 lh-sm {{ ($title==="laporan") ? 'active': '' }}" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <strong class="mb-1">Laporan</strong>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-8">
    @yield('isi')
    </div>
</div>

</x-app-layout>
