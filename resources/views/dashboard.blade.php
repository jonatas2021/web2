<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     @foreach(Auth::user()->Estudante as $estudante)
                            <tr>
                                <td>{{$estudante->nome}}</td>
                                <td>{{$estudante->idade}}</td>
                                <td>{{$estudante->cpf}}</td>
                                <td><form action="/apagar-estudante/{{$estudante->id}}" method="post">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="apagar"> apagar </button>

                                </form>
                                </td>
                                <td>
                                <a href="/editar-estudante/{{$estudante->id}}" method="GET"> editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-estudante" method="POST">
                        @csrf
                        <input type="text" name="nome" placeholder="nome">
                        <input type="text" name="idade" placeholder="idade">
                        <input type="text" name="cpf" placeholder="cpf">
                        <input type="submit" value="add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
