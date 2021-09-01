<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>AprendAqui</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('/vendors/bootstrap/css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/fontawesome-free-5.8.1-web/fontawesome-free-5.8.1-web/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('/vendors/bootstrap/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('/vendors/bootstrap/css/cursor.css')}}">
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->


  <link rel="stylesheet" type="text/css" href="{{asset('/css/index-style.css')}}"/>

</head>

<body>
  <div class=" cotn_principal">
    <div class="row">
      <div class="col-md-6">
        <div class="cont_ba_opcitiy">
          <h2>Professor</h2>
          {{ Session::get('messageProfessor') }}
          
          <p></p>
          
          <button class="btn_login1" onclick="cambiar_login()">Entrar</button>

          <div>
            <button type="button" class="btn_login" data-toggle="modal" data-target="#modalProfessorCadastro">Cadastre-se</button>
          </div>
        </div>           
      </div>


      @if($errors->any())
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first() }}</strong>
        </span>
      @endif 

      <div class="cont_centrar">
        <div>
          <div>
            <div class="cont_forms">
              <form class="form" method= "POST" name="register" action="{{ route($loginRouteProfessor) }}">
                @csrf
                <div class="cont_form_login">
                    <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">x</i></a>
                    <h2>Professor</h2>
                    <input class="form-control" name="email" type="text" placeholder="Email" required/>
                    <input  class="form-control" name="password" type="password" placeholder="Password" required/>
                    <button  type="submit"  class="btn_login" >LOGIN</button>
                </div>
              </form>

              <form class="form" method= "POST" name="register" action="{{ route('login') }}">
                @csrf
                <div class="cont_form_sign_up">
                  <a href="#"><i class="material-icons">x</i></a>
                  <h2>Aluno</h2>                                
                    <input class="form-control"  name="email" type="text" placeholder="Username" required/>
                    <input class="form-control"  name="password" type="password" placeholder="Password" required/>
                    <button type="submit" class="btn_login">LOGIN</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Modal Professor Cadastro 
  <div class="modal fade" id="modalProfessorCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Cadastre-se</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form" method= "POST" name="register" action="{{ route('registerprofessor') }}">
              @csrf
              <div class="row">
                <div class="form-group col-12" id="form-group-admin">
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12" id="form-group-admin">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-4" id=" form-group-admin2">
                    <input type="num" class="form-control" name="telefone" id="telefone1" placeholder="Telefone" required>
                </div>
                <div class="form-group col-4" id="form-group-admin">
                    <input type="num" class="form-control" name="cpf" placeholder="CPF" required>
                </div>
                <div class="form-group col-4" id=" form-group-admin2">
                    <input type="password" class="form-control" name="password" id="password1" placeholder="Senha" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12" id="form-group-admin">
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12" id="form-group-admin">
                  <textarea class="form-control color-input" rows="3" id="habilidade" name="habilidade" placeholder="Descreva suas habilidades" required></textarea>
                </div>
              </div>
              {{ Session::get('message') }}
              <div class="modal-footer">
                <button type="submit" class="btn btn_login">Cadastrar</button>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>-->



  <script src="{{asset('vendors/jquery/js/jquery.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/js/wow.min.js')}}"></script>
  <script src="{{asset('js/index.js')}}"></script>

</body>
</html>





