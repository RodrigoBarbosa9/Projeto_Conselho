<div class="row">
	<div class="col-lg-12">
		<h1>Listagem de Disciplinas</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-9">
		<div class="form-group input-group">
			<input type="text" class="form-control">
			<span class="input-group-btn"><button class="btn btn-default" ><i class="fa fa-search"></i></button>
			</span> 
		</div>
	</div>
	<div class="col-lg-3">
		<input type="button" class="btn btn-success" onclick="javascript:location ='index.php?pg=cadastro'" value="novo">
	</div>
</div>
<div>
	<div class="col-lg-12">
		<div class="table-responsive">
		<table class="table table-bordered table-hover" >
			<thead>
				<tr>
					<td>#</td>
					<td>NOME</td>
					<td>Sigla</td>
					<td>Carga Horario</td>
					<td>AÇÕES</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Topicos Avançados</td>
					<td>TAI I</td>
					<td>68hrs</td>
					<td><button class="btn btn-default"><i class="fa fa-pencil"></i></button>
					<button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Banco de Dados I</td>
					<td>BD I</td>
					<td>60hrs</td>
					<td><button class="btn btn-default"><i class="fa fa-pencil"></i></button>
					<button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></td>
				</tr>
			</tbody>
		</table>	
		</div>
	</div>
</div>