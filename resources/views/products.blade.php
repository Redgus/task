@extends('home')

@section('title')
    Продукты
@endsection

@section('content')

<div class="panel panel-sky">
    <div class="panel-heading">
       <h2>Таблица продуктов</h2>
    </div>
    <div class="panel-body">
       <div class="table-responsive">
          <table class="table">
             <thead>
                <tr>
                   <th> Продукт </th>
                   <th> Количество </th>
                   <th> Цена </th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td> Рубашка </td>
                   <td> 100 </td>
                   <td> 50000 </td>
                </tr>
             </tbody>
          </table>
       </div>
    </div>
 </div>
 
@endsection