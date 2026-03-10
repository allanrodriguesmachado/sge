<x-layouts.app>
    <h1>Create Staff</h1>
    <form action="{{route('staff.store')}}" method="post">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Digite o nome">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="Digite o E-mail">
        </div>

        <div>
            <label for="phone">Telefone</label>
            <input type="text" name="phone" placeholder="Digite o Telefone">
        </div>

        <div>
            <select name="work_shift">
                <option  value="morning">Manha</option>
                <option  value="afternoon">Tarde</option>
                <option  value="full">Integral</option>
            </select>
        </div>

        !@section('success')
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endsection


        <button type="submit">Enviar</button>
    </form>
</x-layouts.app>
