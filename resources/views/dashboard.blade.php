@extends('layouts.app')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="d-flex align-items-center">
                            <li class="icon-box icon-box-lg bg-primary me-3">
                                <svg width="30" height="38" viewBox="0 0 30 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.9288 37.75H3.75C1.67875 37.75 0 36.0713 0 34V23.5863C0 21.7738 1.29625 20.2213 3.07875 19.8975C5.72125 19.4163 10.2775 18.5875 12.855 18.12C14.2737 17.8612 15.7263 17.8612 17.145 18.12C19.7225 18.5875 24.2788 19.4163 26.9213 19.8975C28.7038 20.2213 30 21.7738 30 23.5863C30 26.3125 30 31.0825 30 34C30 36.0713 28.3212 37.75 26.25 37.75H12.9288ZM24.785 22.05L24.79 22.0563C25.0088 22.3838 25.06 22.795 24.9287 23.1662L24.0462 25.6662C23.9312 25.9925 23.685 26.2575 23.3675 26.3963L21.7075 27.12L22.3675 28.4412C22.5525 28.81 22.5425 29.2462 22.3425 29.6075L19.2075 35.25H26.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L24.785 22.05ZM21.3663 21.4275L16.6975 20.5788C15.575 20.375 14.425 20.375 13.3025 20.5788L8.63375 21.4275L7.63625 22.9238L8.13 24.3213L10.5 25.3537C10.8138 25.4912 11.0575 25.7512 11.175 26.0737C11.2925 26.3962 11.2712 26.7525 11.1175 27.0588L10.1625 28.9688L13.6525 35.25H16.3475L19.8375 28.9688L18.8825 27.0588C18.7288 26.7525 18.7075 26.3962 18.825 26.0737C18.9425 25.7512 19.1862 25.4912 19.5 25.3537L21.87 24.3213L22.3638 22.9238L21.3663 21.4275ZM5.215 22.05L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25H10.7925L7.6575 29.6075C7.4575 29.2462 7.4475 28.81 7.6325 28.4412L8.2925 27.12L6.6325 26.3963C6.315 26.2575 6.06875 25.9925 5.95375 25.6662L5.07125 23.1662C4.94 22.795 4.99125 22.3838 5.21 22.0563L5.215 22.05ZM23.75 29V31.5C23.75 32.19 24.31 32.75 25 32.75C25.69 32.75 26.25 32.19 26.25 31.5V29C26.25 28.31 25.69 27.75 25 27.75C24.31 27.75 23.75 28.31 23.75 29ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                        fill="white"></path>
                                </svg>
                            </li>
                            <li>
                                <span>Total Project</span>
                                <h3 class="my-1">932</h3>
                                <span>+10% than last month</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="d-flex align-items-center">
                            <li class="icon-box icon-box-lg bg-primary me-3">
                                <svg width="30" height="38" viewBox="0 0 30 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.9288 37.75H3.75C1.67875 37.75 0 36.0713 0 34V23.5863C0 21.7738 1.29625 20.2213 3.07875 19.8975C5.72125 19.4163 10.2775 18.5875 12.855 18.12C14.2737 17.8612 15.7263 17.8612 17.145 18.12C19.7225 18.5875 24.2788 19.4163 26.9213 19.8975C28.7038 20.2213 30 21.7738 30 23.5863C30 26.3125 30 31.0825 30 34C30 36.0713 28.3212 37.75 26.25 37.75H12.9288ZM24.785 22.05L24.79 22.0563C25.0088 22.3838 25.06 22.795 24.9287 23.1662L24.0462 25.6662C23.9312 25.9925 23.685 26.2575 23.3675 26.3963L21.7075 27.12L22.3675 28.4412C22.5525 28.81 22.5425 29.2462 22.3425 29.6075L19.2075 35.25H26.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L24.785 22.05ZM21.3663 21.4275L16.6975 20.5788C15.575 20.375 14.425 20.375 13.3025 20.5788L8.63375 21.4275L7.63625 22.9238L8.13 24.3213L10.5 25.3537C10.8138 25.4912 11.0575 25.7512 11.175 26.0737C11.2925 26.3962 11.2712 26.7525 11.1175 27.0588L10.1625 28.9688L13.6525 35.25H16.3475L19.8375 28.9688L18.8825 27.0588C18.7288 26.7525 18.7075 26.3962 18.825 26.0737C18.9425 25.7512 19.1862 25.4912 19.5 25.3537L21.87 24.3213L22.3638 22.9238L21.3663 21.4275ZM5.215 22.05L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25H10.7925L7.6575 29.6075C7.4575 29.2462 7.4475 28.81 7.6325 28.4412L8.2925 27.12L6.6325 26.3963C6.315 26.2575 6.06875 25.9925 5.95375 25.6662L5.07125 23.1662C4.94 22.795 4.99125 22.3838 5.21 22.0563L5.215 22.05ZM23.75 29V31.5C23.75 32.19 24.31 32.75 25 32.75C25.69 32.75 26.25 32.19 26.25 31.5V29C26.25 28.31 25.69 27.75 25 27.75C24.31 27.75 23.75 28.31 23.75 29ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                        fill="white"></path>
                                </svg>
                            </li>
                            <li>
                                <span>Total Project</span>
                                <h3 class="my-1">932</h3>
                                <span>+10% than last month</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="d-flex align-items-center">
                            <li class="icon-box icon-box-lg bg-primary me-3">
                                <svg width="30" height="38" viewBox="0 0 30 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.9288 37.75H3.75C1.67875 37.75 0 36.0713 0 34V23.5863C0 21.7738 1.29625 20.2213 3.07875 19.8975C5.72125 19.4163 10.2775 18.5875 12.855 18.12C14.2737 17.8612 15.7263 17.8612 17.145 18.12C19.7225 18.5875 24.2788 19.4163 26.9213 19.8975C28.7038 20.2213 30 21.7738 30 23.5863C30 26.3125 30 31.0825 30 34C30 36.0713 28.3212 37.75 26.25 37.75H12.9288ZM24.785 22.05L24.79 22.0563C25.0088 22.3838 25.06 22.795 24.9287 23.1662L24.0462 25.6662C23.9312 25.9925 23.685 26.2575 23.3675 26.3963L21.7075 27.12L22.3675 28.4412C22.5525 28.81 22.5425 29.2462 22.3425 29.6075L19.2075 35.25H26.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L24.785 22.05ZM21.3663 21.4275L16.6975 20.5788C15.575 20.375 14.425 20.375 13.3025 20.5788L8.63375 21.4275L7.63625 22.9238L8.13 24.3213L10.5 25.3537C10.8138 25.4912 11.0575 25.7512 11.175 26.0737C11.2925 26.3962 11.2712 26.7525 11.1175 27.0588L10.1625 28.9688L13.6525 35.25H16.3475L19.8375 28.9688L18.8825 27.0588C18.7288 26.7525 18.7075 26.3962 18.825 26.0737C18.9425 25.7512 19.1862 25.4912 19.5 25.3537L21.87 24.3213L22.3638 22.9238L21.3663 21.4275ZM5.215 22.05L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25H10.7925L7.6575 29.6075C7.4575 29.2462 7.4475 28.81 7.6325 28.4412L8.2925 27.12L6.6325 26.3963C6.315 26.2575 6.06875 25.9925 5.95375 25.6662L5.07125 23.1662C4.94 22.795 4.99125 22.3838 5.21 22.0563L5.215 22.05ZM23.75 29V31.5C23.75 32.19 24.31 32.75 25 32.75C25.69 32.75 26.25 32.19 26.25 31.5V29C26.25 28.31 25.69 27.75 25 27.75C24.31 27.75 23.75 28.31 23.75 29ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                        fill="white"></path>
                                </svg>
                            </li>
                            <li>
                                <span>Total Project</span>
                                <h3 class="my-1">932</h3>
                                <span>+10% than last month</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="d-flex align-items-center">
                            <li class="icon-box icon-box-lg bg-primary me-3">
                                <svg width="30" height="38" viewBox="0 0 30 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.9288 37.75H3.75C1.67875 37.75 0 36.0713 0 34V23.5863C0 21.7738 1.29625 20.2213 3.07875 19.8975C5.72125 19.4163 10.2775 18.5875 12.855 18.12C14.2737 17.8612 15.7263 17.8612 17.145 18.12C19.7225 18.5875 24.2788 19.4163 26.9213 19.8975C28.7038 20.2213 30 21.7738 30 23.5863C30 26.3125 30 31.0825 30 34C30 36.0713 28.3212 37.75 26.25 37.75H12.9288ZM24.785 22.05L24.79 22.0563C25.0088 22.3838 25.06 22.795 24.9287 23.1662L24.0462 25.6662C23.9312 25.9925 23.685 26.2575 23.3675 26.3963L21.7075 27.12L22.3675 28.4412C22.5525 28.81 22.5425 29.2462 22.3425 29.6075L19.2075 35.25H26.25C26.94 35.25 27.5 34.69 27.5 34C27.5 31.0825 27.5 26.3125 27.5 23.5863C27.5 22.9825 27.0675 22.465 26.4738 22.3562L24.785 22.05ZM21.3663 21.4275L16.6975 20.5788C15.575 20.375 14.425 20.375 13.3025 20.5788L8.63375 21.4275L7.63625 22.9238L8.13 24.3213L10.5 25.3537C10.8138 25.4912 11.0575 25.7512 11.175 26.0737C11.2925 26.3962 11.2712 26.7525 11.1175 27.0588L10.1625 28.9688L13.6525 35.25H16.3475L19.8375 28.9688L18.8825 27.0588C18.7288 26.7525 18.7075 26.3962 18.825 26.0737C18.9425 25.7512 19.1862 25.4912 19.5 25.3537L21.87 24.3213L22.3638 22.9238L21.3663 21.4275ZM5.215 22.05L3.52625 22.3562C2.9325 22.465 2.5 22.9825 2.5 23.5863V34C2.5 34.69 3.06 35.25 3.75 35.25H10.7925L7.6575 29.6075C7.4575 29.2462 7.4475 28.81 7.6325 28.4412L8.2925 27.12L6.6325 26.3963C6.315 26.2575 6.06875 25.9925 5.95375 25.6662L5.07125 23.1662C4.94 22.795 4.99125 22.3838 5.21 22.0563L5.215 22.05ZM23.75 29V31.5C23.75 32.19 24.31 32.75 25 32.75C25.69 32.75 26.25 32.19 26.25 31.5V29C26.25 28.31 25.69 27.75 25 27.75C24.31 27.75 23.75 28.31 23.75 29ZM15 0.25C10.5163 0.25 6.875 3.89125 6.875 8.375C6.875 12.8587 10.5163 16.5 15 16.5C19.4837 16.5 23.125 12.8587 23.125 8.375C23.125 3.89125 19.4837 0.25 15 0.25ZM15 2.75C18.105 2.75 20.625 5.27 20.625 8.375C20.625 11.48 18.105 14 15 14C11.895 14 9.375 11.48 9.375 8.375C9.375 5.27 11.895 2.75 15 2.75Z"
                                        fill="white"></path>
                                </svg>
                            </li>
                            <li>
                                <span>Total Project</span>
                                <h3 class="my-1">932</h3>
                                <span>+10% than last month</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 ">
                <div class="card crypto-chart ">
                    <div class="card-header pb-0 border-0 flex-wrap">
                        <div class="mb-2 mb-sm-0">
                            <div class="chart-title mb-3">
                                <h2 class="heading">Project Performance</h2>
                            </div>
                        </div>
                        <div class="p-static">
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div class="round weekly" id="dzOldSeries">
                                    <div>
                                        <input type="checkbox" id="checkbox1" name="radio" value="weekly">
                                        <label for="checkbox1" class="checkmark"></label>
                                    </div>
                                    <div>
                                        <span class="fs-14">This Week</span>
                                        <h4 class="fs-5 font-w700 mb-0">1.245</h4>
                                    </div>
                                </div>
                                <div class="round" id="dzNewSeries">
                                    <div>
                                        <input type="checkbox" id="checkbox" name="radio" value="monthly">
                                        <label for="checkbox" class="checkmark"></label>
                                    </div>
                                    <div>
                                        <span class="fs-14">Last Week</span>
                                        <h4 class="fs-5 font-w700 mb-0">1.356</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2 custome-tooltip pb-0 px-2">
                        <div id="marketChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card h-auto">
                    <div class="card-header border-0 pb-0 flex-wrap">
                        <h4 class="heading mb-3 mb-sm-0">Project Overview</h4>
                        <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-series="week" id="pills-week-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"
                                    aria-selected="true">Week</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-month" type="button" role="tab"
                                    aria-selected="false">Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-year" type="button" role="tab"
                                    aria-selected="false">Year</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-all" type="button" role="tab"
                                    aria-selected="false">All</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body  p-0">
                        <div id="overiewChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 wow fadeInUp" data-wow-delay="1.5s">
                <div class="card">
                    <div class="card-header pb-0 border-0 flex-wrap">
                        <div>
                            <div class="mb-3">
                                <h2 class="heading mb-0">Calendar</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center event-calender  py-0 px-1">
                        <input type='text' class="form-control d-none" id='datetimepicker1'>
                    </div>
                </div>
            </div>
            <!--column-->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header py-3 border-0 px-3">
                        <h4 class="heading m-0">Project Deatails</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive basic-tbl">
                            <table id="teacher-table" class="tech-data" style="min-width: 798px">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Qulification</th>
                                        <th>Fees</th>
                                        <th class="text-end">Performance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Yatin Xarma</td>
                                        <td>Programming</td>
                                        <td>B.Tech</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span class="badge badge-sm light badge-danger">Bad</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ramen</td>
                                        <td>Basic Art</td>
                                        <td>BA</td>
                                        <td>$ 218.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Harry</td>
                                        <td>English</td>
                                        <td>B.Tech</td>
                                        <td>$ 219.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Hanu</td>
                                        <td>Programing</td>
                                        <td>B.Tech</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jorge</td>
                                        <td>History</td>
                                        <td>BA</td>
                                        <td>$ 212.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>James</td>
                                        <td>History</td>
                                        <td>B.Com</td>
                                        <td>$ 21.70</td>
                                        <td class="text-end"><span class="badge badge-sm light badge-danger">Bad</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vicky canady</td>
                                        <td>Basic Art</td>
                                        <td>B.Tech</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jack Xarma</td>
                                        <td>Programming</td>
                                        <td>B.Tech</td>
                                        <td>$ 19.2.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Ramon</td>
                                        <td>Basic Art</td>
                                        <td>BA</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Harry john</td>
                                        <td>History</td>
                                        <td>B.Tech</td>
                                        <td>$ 18.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Hardy</td>
                                        <td>Basic Algorithm</td>
                                        <td>B.E</td>
                                        <td>$ 17.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jeo</td>
                                        <td>English</td>
                                        <td>BA</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>James Brown</td>
                                        <td>History</td>
                                        <td>B.Com</td>
                                        <td>$ 15.70</td>
                                        <td class="text-end"><span class="badge badge-sm light badge-danger">Bad</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>John</td>
                                        <td>Art</td>
                                        <td>B.Tech</td>
                                        <td>$ 217.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Janny</td>
                                        <td>Basic Algorithm</td>
                                        <td>B.Tech</td>
                                        <td>$ 21.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>
                                    <tr>
                                        <td>Jorge clek</td>
                                        <td>English</td>
                                        <td>BA</td>
                                        <td>$ 22.70</td>
                                        <td class="text-end"><span
                                                class="badge badge-sm light badge-success">Good</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/column-->
        </div>
    </div>
</div>
@endsection
