<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Blocks/EmptyState/product.html.twig */
class __TwigTemplate_abe08e985a2b17ad0acc516a0d2e96f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"text-center showcase-list-card\">
  <img class=\"img-responsive mt-3 img-rtl\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/catalog.png"), "html", null, true);
        echo "\">

  <p class=\"mt-4 showcase-list-card__header\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your products", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

  <div class=\"mt-4\">
    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_create");
        echo "\" class=\"btn btn-primary ml-1 new-product-button\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </a>
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import");
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import a list of products.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 37,  65 => 36,  61 => 35,  56 => 33,  52 => 32,  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/product.html.twig", "C:\\xampp\\htdocs\\prestashop\\Prestashop8\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\EmptyState\\product.html.twig");
    }
}
