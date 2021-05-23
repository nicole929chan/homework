<x-layout>
    <h2 style ="text-align:center;position:relative;top:40px;font-size:50px;">遺失物品清單</h2>
    
    <br>
    <br>
    <form action="#" style="max-width: 100px; margin: auto;">
    <a href="{{ route('home.action') }}" class="btn btn-primary">返回首頁</a>
    </form>
    <hr align ="center" width="1300" size="4" color="#006699" noshade="noshade"/>
    <div class="d-flex flex-wrap">
        @foreach ($items as $item)
           <x-item-card :item=$item></x-item-card>
        @endforeach
    </div>
</x-layout>