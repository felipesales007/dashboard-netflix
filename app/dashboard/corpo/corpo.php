<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- card total -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">21</div>
                            </div>
                        </div>
                        <h6 class="big-title">Total de <span class="text-success">usuários</span> cadastrados
                        </h6>
                        <div id="chartTotalEarningsDoc"></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">Adicionar novo usuário</div>
                        <div class="pull-right">
                            <button class="btn btn-success btn-fill btn-icon btn-sm">
                                <i class="ti-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card ativo -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">13</div>
                            </div>
                        </div>
                        <h6 class="big-title">Total de <span class="text-info">usuários</span> ativos
                        </h6>
                        <div id="chartTotalEarningsDoc"></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">Ativar um usuário</div>
                        <div class="pull-right">
                            <button class="btn btn-info btn-fill btn-icon btn-sm">
                                <i class="ti-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card desativo -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">6</div>
                            </div>
                        </div>
                        <h6 class="big-title">Total de <span class="text-muted">usuários</span> desativos
                        </h6>
                        <div id="chartTotalEarningsDoc"></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">Desativar um usuário</div>
                        <div class="pull-right">
                            <button class="btn btn-primary btn-fill btn-icon btn-sm">
                                <i class="ti-na"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card pendente -->
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">2</div>
                            </div>
                        </div>
                        <h6 class="big-title">Total de <span class="text-danger">usuários</span> pendentes
                        </h6>
                        <div id="chartTotalEarningsDoc"></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">Visualizar usuários</div>
                        <div class="pull-right">
                            <button class="btn btn-danger btn-fill btn-icon btn-sm">
                                <i class="ti-user"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tabela -->
            <div class="col-md-12">
				<div class="card">
					<div class="card-content">
						<div class="toolbar"></div>
						<div class="fresh-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th class="disabled-sorting">Actions</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Actions</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Ashton Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Cedric Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Airi Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Brielle Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Herrod Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Rhona Davidson</td>
									<td>Integration Specialist</td>
									<td>Tokyo</td>
									<td>55</td>
									<td>2010/10/14</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Colleen Hurst</td>
									<td>Javascript Developer</td>
									<td>San Francisco</td>
									<td>39</td>
									<td>2009/09/15</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Sonya Frost</td>
									<td>Software Engineer</td>
									<td>Edinburgh</td>
									<td>23</td>
									<td>2008/12/13</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Jena Gaines</td>
									<td>Office Manager</td>
									<td>London</td>
									<td>30</td>
									<td>2008/12/19</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Quinn Flynn</td>
									<td>Support Lead</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2013/03/03</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Charde Marshall</td>
									<td>Regional Director</td>
									<td>San Francisco</td>
									<td>36</td>
									<td>2008/10/16</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Haley Kennedy</td>
									<td>Senior Marketing Designer</td>
									<td>London</td>
									<td>43</td>
									<td>2012/12/18</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Tatyana Fitzpatrick</td>
									<td>Regional Director</td>
									<td>London</td>
									<td>19</td>
									<td>2010/03/17</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Michael Silva</td>
									<td>Marketing Designer</td>
									<td>London</td>
									<td>66</td>
									<td>2012/11/27</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Paul Byrd</td>
									<td>Chief Financial Officer (CFO)</td>
									<td>New York</td>
									<td>64</td>
									<td>2010/06/09</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Gloria Little</td>
									<td>Systems Administrator</td>
									<td>New York</td>
									<td>59</td>
									<td>2009/04/10</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Bradley Greer</td>
									<td>Software Engineer</td>
									<td>London</td>
									<td>41</td>
									<td>2012/10/13</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Dai Rios</td>
									<td>Personnel Lead</td>
									<td>Edinburgh</td>
									<td>35</td>
									<td>2012/09/26</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Jenette Caldwell</td>
									<td>Development Lead</td>
									<td>New York</td>
									<td>30</td>
									<td>2011/09/03</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Yuri Berry</td>
									<td>Chief Marketing Officer (CMO)</td>
									<td>New York</td>
									<td>40</td>
									<td>2009/06/25</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Caesar Vance</td>
									<td>Pre-Sales Support</td>
									<td>New York</td>
									<td>21</td>
									<td>2011/12/12</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Doris Wilder</td>
									<td>Sales Assistant</td>
									<td>Sidney</td>
									<td>23</td>
									<td>2010/09/20</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								<tr>
									<td>Angelica Ramos</td>
									<td>Chief Executive Officer (CEO)</td>
									<td>London</td>
									<td>47</td>
									<td>2009/10/09</td>
									<td>
										<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
										<a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
										<a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>


					</div>
				</div>
			</div>

        </div>
    </div>
</div>