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

/* extension/opencart/admin/view/template/total/low_order_fee.twig */
class __TwigTemplate_eeee367f55bc5463b1f0ff583b10f7e0d8c9bb1e77f3c02172bc0f5a69caf177 extends Template
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
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-total\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-total\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-total\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"total_low_order_fee_total\" value=\"";
        // line 24
        echo ($context["total_low_order_fee_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">";
        // line 25
        echo ($context["help_total"] ?? null);
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-fee\" class=\"col-sm-2 col-form-label\">";
        // line 29
        echo ($context["entry_fee"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"total_low_order_fee_fee\" value=\"";
        // line 31
        echo ($context["total_low_order_fee_fee"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fee"] ?? null);
        echo "\" id=\"input-fee\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 35
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"total_low_order_fee_tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                <option value=\"0\">";
        // line 38
        echo ($context["text_none"] ?? null);
        echo "</option>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 40
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 40);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 40) == ($context["total_low_order_fee_tax_class_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 40);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"total_low_order_fee_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"total_low_order_fee_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 50
        if (($context["total_low_order_fee_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 55
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"total_low_order_fee_sort_order\" value=\"";
        // line 57
        echo ($context["total_low_order_fee_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 65
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/total/low_order_fee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 65,  182 => 57,  177 => 55,  167 => 50,  160 => 46,  154 => 42,  139 => 40,  135 => 39,  131 => 38,  125 => 35,  116 => 31,  111 => 29,  104 => 25,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/total/low_order_fee.twig", "C:\\xampp\\htdocs\\opencart\\extension\\opencart\\admin\\view\\template\\total\\low_order_fee.twig");
    }
}
