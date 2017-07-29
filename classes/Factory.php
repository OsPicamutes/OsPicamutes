<?php
class Factory
{
    public static function getControlador($type)
    {
		switch ($type) {
			
			case "Usuario":
				require_once(CAMINHO_PORTAL.'classes/usuario/ControladorUsuario.php');
				return ControladorUsuario::getInstancia();
				break;
			case "Perfil":
				require_once(CAMINHO_PORTAL.'classes/perfil/ControladorPerfil.php');
				return ControladorPerfil::getInstancia();
				break;
			case "Public":
				require_once(CAMINHO_PORTAL.'classes/public/ControladorPublic.php');
				return ControladorPublic::getInstancia();
				break;
			case "Link":
				require_once(CAMINHO_PORTAL.'classes/link/ControladorLink.php');
				return ControladorLink::getInstancia();
				break;
			case "Associacao":
				require_once(CAMINHO_PORTAL.'classes/associacao/ControladorAssociacao.php');
				return ControladorAssociacao::getInstancia();
				break;
			case "Fornecedor":
				require_once(CAMINHO_PORTAL.'classes/fornecedor/controladorFornecedor.php');
				return controladorFornecedor::getInstancia();
				break;
			case "Contato":
				require_once(CAMINHO_PORTAL.'classes/contato/ControladorContato.php');
				return ControladorContato::getInstancia();
				break;
			case "Endereco":
				require_once(CAMINHO_PORTAL.'classes/endereco/ControladorEndereco.php');
				return ControladorEndereco::getInstancia();
				break;
			case "PlanoConta":
				require_once(CAMINHO_PORTAL.'classes/planoconta/ControladorPlanoConta.php');
				return ControladorPlanoConta::getInstancia();
				break;
			case "Auxiliares":
				require_once(CAMINHO_PORTAL.'classes/auxiliares/ControladorAuxiliares.php');
				return ControladorAuxiliares::getInstancia();
				break;
			case "Associado":
				require_once(CAMINHO_PORTAL.'classes/associado/ControladorAssociado.php');
				return ControladorAssociado::getInstancia();
				break;
			case "Fornecedor":
				require_once(CAMINHO_PORTAL.'classes/fornecedor/ControladorFornecedor.php');
				return ControladorFornecedor::getInstancia();
				break;
		}
    }
}
?>
