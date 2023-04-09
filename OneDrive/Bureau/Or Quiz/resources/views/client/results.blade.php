@extends('layouts.client')





@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results of your test</div>







                <a href="route{{'entj'}}">entj</a>









<!-- 222-->
@if ($result->total_points >= 1 && $result->total_points <= 3)
    La personnalité correspondante est : ESTJ
@elseif ($result->total_points >= 4 && $result->total_points <= 6)
    La personnalité correspondante est : ENTJ
@elseif ($result->total_points >= 7 && $result->total_points <= 9)
    La personnalité correspondante est : ESFJ
@elseif ($result->total_points >= 10 && $result->total_points <= 12)
    La personnalité correspondante est : ENFJ
@elseif ($result->total_points >= 13 && $result->total_points <= 15)
    La personnalité correspondante est : ISTJ
@elseif ($result->total_points >= 16 && $result->total_points <= 18)
    La personnalité correspondante est : ISFJ
@elseif ($result->total_points >= 19 && $result->total_points <= 21)
    La personnalité correspondante est : INTJ
@elseif ($result->total_points >= 22 && $result->total_points <= 24)
    La personnalité correspondante est : INFJ
@elseif ($result->total_points >= 25 && $result->total_points <= 27)
    La personnalité correspondante est : ESTP
@elseif ($result->total_points >= 28 && $result->total_points <= 30)
    La personnalité correspondante est : ESFP
@elseif ($result->total_points >= 31 && $result->total_points <= 33)
    La personnalité correspondante est : ENTP
@elseif ($result->total_points >= 34 && $result->total_points <= 36)
    La personnalité correspondante est : ENFP
@elseif ($result->total_points >= 37 && $result->total_points <= 39)
    La personnalité correspondante est : ISTP
@elseif ($result->total_points >= 40 && $result->total_points <= 42)
    La personnalité correspondante est : ISFP
@elseif ($result->total_points >= 43 && $result->total_points <= 45)
    La personnalité correspondante est : INTP
@else
    La personnalité correspondante est : INFP
    <h1>Métiers convenables à la personnalité INFP</h1>
	<ul>
		<li><strong>Écrivain :</strong> Les INFP sont souvent doués pour l'écriture et apprécient l'expression créative.</li>
		<li><strong>Psychologue ou conseiller :</strong> Les INFP sont souvent empathiques et ont une grande capacité d'écoute.</li>
		<li><strong>Artiste :</strong> Les INFP sont souvent doués pour les arts visuels ou la musique.</li>
		<li><strong>Professeur :</strong> Les INFP aiment souvent enseigner et ont une grande passion pour l'apprentissage.</li>
		<li><strong>Travailleur social :</strong> Les INFP sont souvent motivés par le désir d'aider les autres et de faire une différence dans leur vie.</li>
		<li><strong>Thérapeute :</strong> Les INFP sont souvent empathiques et ont une grande capacité d'écoute, ce qui peut les rendre efficaces en tant que thérapeutes.</li>
	</ul>
@endif



            </div>
        </div>
    </div>
</div>
@endsection
