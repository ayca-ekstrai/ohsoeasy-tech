<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig */
class __TwigTemplate_a711c6dca9e842cbb83f8ff399bee866b4765825b540a0e05ec5d2a9742537c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_layout_customization_form_rest' => [$this, 'block_page_layout_customization_form_rest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  <div class=\"row\">
    <div class=\"col-12\">";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_start');
        echo "
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">settings</i>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose layouts", [], "Admin.Actions"), "html", null, true);
        echo "
              </h3>
              <div class=\"card-body\">
                <table class=\"table\">
                  <thead>
                    <tr>
                      <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Layout", [], "Admin.Global"), "html", null, true);
        echo "</th>
                    </tr>
                  </thead>
                  <tbody>";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customizablePage"]) {
            // line 50
            echo "                      <tr>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["customizablePage"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["customizablePage"], "title", []), $this->getAttribute($context["customizablePage"], "page", []))) : ($this->getAttribute($context["customizablePage"], "page", []))), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["customizablePage"], "description", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["pageLayoutCustomizationForm"] ?? null), "layouts", [], "array"), $this->getAttribute($context["customizablePage"], "page", []), [], "array"), 'widget');
            echo "</td>
                      </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizablePage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                  </tbody>
                </table>";
        // line 59
        $this->displayBlock('page_layout_customization_form_rest', $context, $blocks);
        // line 62
        echo "              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </div>";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'form_end');
        echo "
    </div>
  </div>";
    }

    // line 59
    public function block_page_layout_customization_form_rest($context, array $blocks = [])
    {
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pageLayoutCustomizationForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 60,  125 => 59,  118 => 71,  110 => 65,  105 => 62,  103 => 59,  100 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  77 => 49,  71 => 45,  67 => 44,  63 => 43,  54 => 37,  46 => 31,  43 => 29,  40 => 28,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/customize_page_layouts.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/customize_page_layouts.html.twig");
    }
}
