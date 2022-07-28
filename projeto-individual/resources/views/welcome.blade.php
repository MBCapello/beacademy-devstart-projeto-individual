@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="card shadow">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner center-block">
                <div class="carousel-item active">
                    <img src="https://cdn.pixabay.com/photo/2018/01/28/11/49/cat-3113372_960_720.jpg" class="bd-placeholder-img d-block w-100"  focusable="false" alt="">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Já Viu os peludinhos hoje.</h1>
                            <p>Todo dia temos novos animais esperando por adoção.</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ route('products.index') }}">Veja os peludos para adoção</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2018/03/22/10/23/three-3249952_960_720.jpg" class="bd-placeholder-img d-block w-100"  focusable="false" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Já faz parte do nosso time de Tutores?.</h1>
                            <p>É rápido e fácil. Com alguns cliques você já se cadastra.</p>
                            <p><a class="btn btn-lg btn-primary" href="">cadastrar-se</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.pixabay.com/photo/2017/06/13/19/24/dog-2399764_960_720.jpg" class="bd-placeholder-img d-block w-100"  focusable="false" alt="">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Olá Tutor.</h1>
                            <p>Se você já é um Tutor e está buscando um novo amigo, basta logar e buscar seu novo amigo.</p>
                            <p><a class="btn btn-lg btn-primary" href="">Logar</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container marketing">

            <div class="row">
                <div class="col-lg-4">
                    <img src="https://cdn.dribbble.com/users/1044993/screenshots/14140999/media/a59cfaa50deba04004484f688a70427c.png" class="bd-placeholder-img rounded-circle" width="140" height="130" alt="">

                    <h2 class="fw-normal">Nesse exato momento,</h2>
                    <p>existem milhares de doguinhos e gatinhos esperando um humano para chamar de seu.</p>
                </div>
                <div class="col-lg-4">
                    <img src="https://as1.ftcdn.net/v2/jpg/02/88/11/10/1000_F_288111007_xVq9J0CZ7lkQrxjmy6hQEG2A4Hv9XJaK.jpg" class="bd-placeholder-img rounded-circle" width="140" height="130" alt="">

                    <h2 class="fw-normal">E não há recompensa maior</h2>
                    <p>do que vê-los se tornando aquela coisinha alegre e saudável depois de uma boa dose de cuidado e carinho..</p>
                </div>
                <div class="col-lg-4">
                    <img src="https://cdn.dribbble.com/users/113499/screenshots/7671703/media/1c281ce5c275a0f177fe4f3564638af8.png" class="bd-placeholder-img rounded-circle" width="140" height="130" alt="">

                    <h2 class="fw-normal">Pensando bem, a pergunta é outra:</h2>
                    <p>se você pode mudar o destino de um animal de rua, por que não faria isso?</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Não terá surpresas, <span class="text-muted">caso opte pela adoção de um pet adulto.</span></h2>
                    <p class="lead">Apesar de muitas pessoas terem receio de adotar um pet adulto por acreditarem que terão dificuldades da adaptação em seu novo lar, pensar dessa forma é um erro..</p>
                </div>
                <div class="col-md-5">
                    <img src="https://cdn.pixabay.com/photo/2020/04/16/16/12/dog-5051254_960_720.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" focusable="false" alt="">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Ter um pet em casa <span class="text-muted">faz bem para a saúde.</span></h2>
                    <p class="lead">Vários estudos já mostraram o bem que um pet faz à saúde das pessoas. Além disso, ter um animalzinho em casa resulta em passeios que estimulam os exercícios, melhoram a pressão sanguínea e evita que o dono apresente indícios de depressão, ansiedade ou estresse.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://cdn.pixabay.com/photo/2017/05/30/02/00/adoption-2355504_960_720.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" focusable="false" alt="">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1"> Ter um pet em casa = <span class="text-muted">felicidade para o lar.</span></h2>
                <p class="lead">Do mesmo modo em que você pratica o bem para o pet, ele também se esforça para proporcionar momentos de alegria para sua vida. Na verdade, o sentimento de felicidade estará
                    presente para a família toda.

                    .</p>
                </div>
                <div class="col-md-5">
                    <img src="https://cdn.pixabay.com/photo/2018/01/11/17/17/cat-3076495_960_720.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" focusable="false" alt="">
                </div>
            </div>

            <hr class="featurette-divider">
        </div>
    </div>
@endsection
