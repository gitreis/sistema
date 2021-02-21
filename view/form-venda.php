<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <title>Produtos</title>
  </head>
  <body>

    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./home.php">
                <img src="../demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div>
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(../demo/faces/male/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Thomas Anderson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./home.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="./produtos.php" class="nav-link"><i class="fe fe-package"></i> Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a href="./form-venda.php" class="nav-link active"><i class="fe fe-dollar-sign"></i> Venda</a>
                  </li>
                  <li class="nav-item">
                    <a href="./produtos-excluidos.php" class="nav-link"><i class="fe fe-trash"></i> Lixeira</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="row">
            <div class="col-lg-12">
              <form class="card">
                <div class="card-body">
                  <h3 class="card-title">Realizar venda de um produto</h3>
                  <div class="row">
		    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-label">Produto</label>
                        <select class="form-control custom-select">
                          <option value="">Batata</option>
                          <option value="">Arroz</option>
                          <option value="">Feijão</option>
                          <option value="">Coca-cola 2LT</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Quantidade</label>
                        <input type="number" class="form-control" placeholder="Digite aqui a quantidade">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Valor unitário</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                          </span>
                          <input type="text" class="form-control text-right" aria-label="Valor">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <div class="form-group">
                        <label class="form-label">Valor total</label>
                        <div class="input-group">
                          <span class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                          </span>
                          <input type="text" class="form-control text-right" aria-label="Valor" disabled="disabled" title="Este campo não pode ser alterado">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                      <div class="form-group">
                        <div class="form-label">&nbsp;</div>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                            <span class="custom-control-label">Atualizar valor unitário do produto</span>
                          </label>
			</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-left" style="display: flex; justify-content: space-between">
		  <div>
		    <a href="./produtos.php" class="btn btn-secondary">Voltar para produtos</a>
		  </div>
		  <div>
		    <button type="submit" class="btn btn-primary">Confirmar</button>
		  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	<div class="my-3 my-md-5">
          <div class="container">
            <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Últimas vendas realizadas</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">#</th>
                          <th>Produto</th>
                          <th>Quantidade</th>
                          <th>Valor unitário</th>
                          <th>Valor total da venda</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="text-muted">2</span></td>
                          <td>Batata</td>
                          <td>
                            2
                          </td>
                          <td>
                            R$ 1,50
                          </td>
                          <td>
                            R$ 3,00
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">1</span></td>
                          <td>Batata</td>
                          <td>
                            10
                          </td>
                          <td>
                            R$ 1,50
                          </td>
                          <td>
                            R$ 15,00
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
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>