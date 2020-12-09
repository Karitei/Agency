<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="table-responsive">
                <div id="zero_configuration_table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="zero_configuration_table_length"><label>Show <select name="zero_configuration_table_length" aria-controls="zero_configuration_table" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="zero_configuration_table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_configuration_table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="display table table-striped table-bordered dataTable" id="zero_configuration_table" style="width: 100%;" role="grid" aria-describedby="zero_configuration_table_info">
                                <thead>
                                <tr role="row"><th class="sorting" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 54px;">Name</th><th class="sorting" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 78px;">Position</th><th class="sorting" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 41px;">Office</th><th class="sorting_desc" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" aria-sort="descending" style="width: 26px;">Age</th><th class="sorting" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 56px;">Start date</th><th class="sorting" tabindex="0" aria-controls="zero_configuration_table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 54px;">Salary</th></tr>
                                </thead>
                                <tbody>

                                <tr role="row" class="odd">
                                    <td class="">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td class="sorting_1">66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td class="sorting_1">66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Jackson Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td class="sorting_1">65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td class="sorting_1">64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td class="sorting_1">64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td class="sorting_1">64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td class="sorting_1">63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Zenaida Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td class="sorting_1">63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Vivian Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td class="sorting_1">62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td class="sorting_1">61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr></tbody>
                                <tfoot>
                                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="zero_configuration_table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_configuration_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_configuration_table_previous"><a href="#" aria-controls="zero_configuration_table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="zero_configuration_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_configuration_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_configuration_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_configuration_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_configuration_table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_configuration_table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="zero_configuration_table_next"><a href="#" aria-controls="zero_configuration_table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>
</x-app-layout>
