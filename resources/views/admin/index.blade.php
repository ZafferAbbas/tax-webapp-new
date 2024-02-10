@extends('layouts.app')
@section('content')
    <!-- Title -->
    <h1 class="h2">Dashboard</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Users
                                </h5>

                                <!-- Subtitle -->
                                <h2 class="mb-0" id="users-section">0</h2>
                            </div>

                            <span class="text-primary">
                                <i data-feather="users"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <!-- Card -->
            <div class="card border-0 flex-fill w-100"
                data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                id="users">
                <div class="card-header border-0 card-header-space-between">
                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">Users</h2>

                    <!-- Dropdown -->
                    <div class="dropdown ms-4">
                        <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                <g>
                                    <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                    <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                    <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                                </g>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript: void(0);" class="dropdown-item">
                                Export report
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Share
                            </a>
                            <a href="javascript: void(0);" class="dropdown-item">
                                Action
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="w-60px">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="checkAllCheckboxes" />
                                    </div>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                        Full name
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                        Email
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                        User ID
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                        Signed up
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                        Status
                                    </a>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="list">
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Hakeem Chan</span>
                                </td>
                                <td class="email">
                                    lobortis.augue@natoquepenatibuset.ca
                                </td>
                                <td class="id">#9265</td>
                                <td class="date" data-signed="1648252800">03.26.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/44bfbd93721837b9534e9dc6fc058dbaef92d03a/f9236/assets/images/profiles/profile-23.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Orli J. Goodman</span>
                                </td>
                                <td class="email">pede@at.com</td>
                                <td class="id">#8545</td>
                                <td class="date" data-signed="1627858800">08.02.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/236af360580cfc7622e3a7d309d709a5018937c5/e3ee4/assets/images/profiles/profile-16.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Halee P. Lane</span>
                                </td>
                                <td class="email">diam@nislNullaeu.net</td>
                                <td class="id">#4445</td>
                                <td class="date" data-signed="1615680000">03.14.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">KS</span>
                                    </div>
                                    <span class="name fw-bold">Kimberly Salinas</span>
                                </td>
                                <td class="email">
                                    in.lobortis.tellus@faucibusorci.co.uk
                                </td>
                                <td class="id">#2391</td>
                                <td class="date" data-signed="1615939200">03.17.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/963edcf9fc0c25098f00370b3b3d021e2ddac277/e69d6/assets/images/profiles/profile-17.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Galena Oliver</span>
                                </td>
                                <td class="email">
                                    eleifend.nec@ligulaconsectetuerrhoncus.ca
                                </td>
                                <td class="id">#8987</td>
                                <td class="date" data-signed="1607990400">12.15.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/768c1ecfdff6a59ab55d514b80bd59e8dfa28996/35a64/assets/images/profiles/profile-19.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Kelly Doyle</span>
                                </td>
                                <td class="email">urna.et@volutpatNulladignissim.org</td>
                                <td class="id">#5898</td>
                                <td class="date" data-signed="1650495600">04.21.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-danger"></span>Overdue
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Keane Wyatt</span>
                                </td>
                                <td class="email">quam@Ut.org</td>
                                <td class="id">#3431</td>
                                <td class="date" data-signed="1655506800">06.18.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-success-soft">NA</span>
                                    </div>
                                    <span class="name fw-bold">Nasim Aguirre</span>
                                </td>
                                <td class="email">nisl@mollis.net</td>
                                <td class="id">#6701</td>
                                <td class="date" data-signed="1602975600">10.18.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-danger"></span>Overdue
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/23af178af51cd04f5a1b181720a77e2839e7a4be/5d54f/assets/images/profiles/profile-25.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Leo Johnston</span>
                                </td>
                                <td class="email">
                                    Cum.sociis@Etiambibendumfermentum.co.uk
                                </td>
                                <td class="id">#9258</td>
                                <td class="date" data-signed="1624748400">06.27.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Macon Dean</span>
                                </td>
                                <td class="email">aliquam@nec.edu</td>
                                <td class="id">#4885</td>
                                <td class="date" data-signed="1614470400">02.28.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Yoko Grimes</span>
                                </td>
                                <td class="email">ut.eros@Donecporttitor.co.uk</td>
                                <td class="id">#1960</td>
                                <td class="date" data-signed="1635289200">10.27.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/395009794393b7ec5f8c3faaf9823b0a3692032b/71f55/assets/images/profiles/profile-27.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Jordan Douglas</span>
                                </td>
                                <td class="email">
                                    fermentum.convallis.ligula@euenimEtiam.edu
                                </td>
                                <td class="id">#8385</td>
                                <td class="date" data-signed="1646265600">03.03.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/408c347002e5d3c7a119c65184b1959dac40f3d7/46d8d/assets/images/profiles/profile-30.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Carly Beard</span>
                                </td>
                                <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                                <td class="id">#9380</td>
                                <td class="date" data-signed="1654902000">06.11.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/5c7ec5413a460dc895a7798c37ce609f43ad36b0/c94b0/assets/images/profiles/profile-29.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Kareem Q. Weeks</span>
                                </td>
                                <td class="email">eget@aliquetProinvelit.co.uk</td>
                                <td class="id">#9761</td>
                                <td class="date" data-signed="1622329200">05.30.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-danger"></span>Overdue
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-danger-soft">DH</span>
                                    </div>
                                    <span class="name fw-bold">Drew R. Hatfield</span>
                                </td>
                                <td class="email">Integer.vulputate@facilisi.edu</td>
                                <td class="id">#4798</td>
                                <td class="date" data-signed="1626562800">07.18.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/693e2209e9a62e54c60745dd18751d70c3dec10a/9d43e/assets/images/profiles/profile-22.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Kitra F. Strickland</span>
                                </td>
                                <td class="email">Donec.consectetuer@dolorNulla.net</td>
                                <td class="id">#1246</td>
                                <td class="date" data-signed="1651791600">05.06.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Jack Dennis</span>
                                </td>
                                <td class="email">
                                    Quisque.libero.lacus@torquentper.com
                                </td>
                                <td class="id">#1099</td>
                                <td class="date" data-signed="1658703600">07.25.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-success"></span>Successful
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/d48629dc873bf03c72cd58826b5de65bc800aaac/5bb69/assets/images/profiles/profile-10.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Tyler Hartman</span>
                                </td>
                                <td class="email">
                                    arcu.imperdiet@Pellentesqueultriciesdignissim.com
                                </td>
                                <td class="id">#9151</td>
                                <td class="date" data-signed="1651359600">05.01.2022</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/14bd6c6c1ba1296a1542d31d7dd9490e8bc9e472/d1f70/assets/images/profiles/profile-18.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Hally Gilmore</span>
                                </td>
                                <td class="email">
                                    lacus.Etiam@Pellentesquehabitantmorbi.net
                                </td>
                                <td class="id">#9846</td>
                                <td class="date" data-signed="1633302000">10.04.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="../d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpg"
                                            alt="..." class="avatar-img" width="30" height="30" />
                                    </div>
                                    <span class="name fw-bold">Rosalyn Cherry</span>
                                </td>
                                <td class="email">at.egestas.a@eunullaat.co.uk</td>
                                <td class="id">#9564</td>
                                <td class="date" data-signed="1593558000">07.01.2021</td>
                                <td class="status">
                                    <span class="legend-circle bg-warning"></span>Pending
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- / .table-responsive -->

                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-5 text-secondary small">
                            Showing: <span class="list-pagination-page-first"></span> -
                            <span class="list-pagination-page-last"></span> of
                            <span class="list-pagination-pages"></span>
                        </div>

                        <!-- Pagination -->
                        <ul class="pagination list-pagination mb-0"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
