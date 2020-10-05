<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function pesquisar(Request $request)
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $descricao = $request->Input('descricao');
        
        // Busca produtos com o conteúdo da $descricao
        $produtos = Produto::where('descricao', 'like', '%'.$descricao.'%')->get();
        
        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos', $produtos);
    }

    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }

    public function inserir(Request $request)
    {
        // Criando um novo objeto do tipo Produto
        $produto = new Produto();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $produto->descricao = $request->Input('descricao');
        $produto->quantidade = $request->Input('quantidade');
        $produto->valor = $request->Input('valor');
        $produto->data_vencimento = $request->Input('data_vencimento');

        // Salvando no banco de dados
        $produto->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Produto inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('mensagem', $mensagem);
    }

    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $produto = Produto::find($id);
        
        // Envia os dados deste registro a view produto.alterar
        return view('produto.alterar')->with('produto', $produto);
    }

    public function alterar(Request $request)
    {
        $id = $request->Input('id');
        $p = Produto::find($id);

        $p->descricao = $request->Input('descricao');
        $p->quantidade = $request->Input('quantidade');
        $p->valor = $request->Input('valor');
        $p->data_vencimento = $request->Input('data_vencimento');

        $p->save();

        $mensagem = "Produto alterado com sucesso!";
        $produtos = Produto::all();
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $produto = Produto::find($id);

        // Excluindo este objeto
        $produto->delete();

        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Produto excluído com sucesso!";

        // Capturando objetos para enviar a view produto.pesquisar
        $produtos = Produto::all();

        // Retornando a view produto.pesquisar
        return view('produto.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }
}
