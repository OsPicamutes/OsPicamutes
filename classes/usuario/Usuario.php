<?php

    class Usuario
	{

        protected $id;
        protected $nome;
        protected $email;
        protected $sexo;
        protected $login;
        protected $senha;
        protected $dataNascimento;
        protected $dataCadastro;
        protected $cpf;
        protected $rg;
        protected $orgaoExpedidor;
        protected $dataExpedicao;
        protected $ufExpedidor;
        protected $ativo;
        protected $dddTelefone;
        protected $telefone;
        protected $dddCelular;
        protected $celular;
        protected $codEscola;
        protected $listaEndereco;
        protected $listaPerfil;
        protected $foto;
        protected $mantenedor;
		protected $fotoOriginal;
		/*protected $nacionalidade;
		  protected $naturalidade;
		  protected $profissao;*/
        

        public function __construct($id="", 
                                    $escolaId="", 
									$regionalId="",
									$grupoEscolarId="",
                                    $nome="", 
                                    $email="", 
                                    $sexo="", 
                                    $login="", 
                                    $senha="", 
                                    $dataNascimento="", 
                                    $dataCadastro="", 
                                    $cpf="", 
                                    $rg="", 
                                    $orgaoExpedidor="", 
                                    $dataExpedicao="", 
                                    $ufExpedidor="", 
                                    $ativo="",
									$dddTelefone="",
									$telefone="",
									$dddCelular="",
									$celular="",
									$codEscola="",
									$foto="",
                                    $mantenedor="", 
                                    $listaEndereco="", 
                                    $listaPerfil="",
									$fotoOriginal=""
									)
		{
		
			$this->id             = $id;
			$this->escolaId       = $escolaId;
			$this->regionalId     = $regionalId;
			$this->grupoEscolarId = $grupoEscolarId;
			$this->nome           = $nome;
			$this->email          = $email;
			$this->sexo           = $sexo;
			$this->login          = $login;
			$this->senha          = $senha;
			$this->dataNascimento = $dataNascimento;
			$this->dataCadastro   = $dataCadastro;
			$this->cpf            = $cpf;
			$this->rg             = $rg;
			$this->orgaoExpedidor = $orgaoExpedidor;
			$this->dataExpedicao  = $dataExpedicao;
			$this->ufExpedidor    = $ufExpedidor;
			$this->ativo          = $ativo;
			$this->dddTelefone    = $dddTelefone;
			$this->telefone       = $telefone;
			$this->dddCelular     = $dddCelular;
			$this->celular        = $celular;
			$this->codEscola      = $codEscola;
			$this->listaEndereco  = $listaEndereco;
			$this->listaPerfil    = $listaPerfil;
			$this->foto    		  = $foto;
			$this->mantenedor	  = $mantenedor;
			$this->fotoOriginal	  = $fotoOriginal;
		
        }
        
		// o mtodo __set  responsvel por setar o valor de uma propriedade.
        public function __set( $chave, $valor )
		{
            $this->{$chave} = $valor;
        }
        
		//o mtodo __get  responsvel por interceptar o retorno de uma propriedade. 
        public function __get( $chave )
		{
            return $this->{$chave};
        }
        
		//Os mtodos __isset e __unset interferem nas chamadas s funes isset() e unset() respectivamente.
        public function __isset( $chave )
		{
            return isset( $this->{$chave} );
        }

        public function __unset( $chave )
		{
            unset( $this->{$chave} );
        }
		
		public function setEscola($valor)
		{
			$this->escolaId = $valor;
		}
        
		//O mtodo __call  chamado toda vez que um mtodo  chamado e no encontrado.
        public function __call( $nomeDoMetodo, $argumentos )
		{
            echo 'No foi possvel acessar o mtodo: ' . $nomeDoMetodo . "";
        }

    }
?>