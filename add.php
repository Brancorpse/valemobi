<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Item</h2>

<form action="add.php" data-toggle="validator" method="post" name="additem">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Produto</label>
       <input id="name" class="form-control" name="merchandise['name']" placeholder="Digite o nome do produto" type="text" 
      data-error="Por favor, o nome do produto." required>
<div class="help-block with-errors"></div>	
    </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="name">Tipo</label>
       <input id="name" class="form-control" name="merchandise['merch_type']" placeholder="Digite O tipo" type="text" 
      data-error="Por favor, informe o tipo de produto." required>
<div class="help-block with-errors"></div>
    </div>

   <div class="row">
    <div class="form-group col-md-2">
      <label for="name">Preço</label>
       <input id="name" class="form-control" name="merchandise['price']" placeholder="Digite o preço" type="text" 
      data-error="Por favor, digite o preço." required>
<div class="help-block with-errors"></div>
    </div>
  
   <div class="row">
    <div class="form-group col-md-2">
      <label for="name">Quantidade</label>
       <input id="name" class="form-control" name="merchandise['quantity']" placeholder="Digite a quantidade" type="text"
      data-error="Por favor, informe a quantidade." required>
<div class="help-block with-errors"></div>
    </div>

   <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Negócio</label>
       <input id="name" class="form-control" name="merchandise['transation']" placeholder="Digite o tipo de negócio" type="text" 
      data-error="Por favor, informe o tipo de negócio." required>
<div class="help-block with-errors"></div>
    </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
	  
    </div>
  </div>  
  <script <script src="js/validator.min.js"></script>
  <script src="js/validator.min.js"></script>
</form>

<?php include(FOOTER_TEMPLATE); ?>

