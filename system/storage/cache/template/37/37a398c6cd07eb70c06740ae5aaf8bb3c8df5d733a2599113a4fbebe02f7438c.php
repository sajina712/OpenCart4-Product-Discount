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

/* extension/paymentmethodfee/admin/view/template/total/payment_method_fee.twig */
class __TwigTemplate_15fe6191ba95f292793b501bf31e87f23c501342f209f91df2623efbaaf9a44f extends Template
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
  <style type=\"text/css\">
  .table thead > tr > td, .table tbody > tr > td {
    vertical-align: top;
  }
  </style>
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-total\" data-bs-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo ($context["cancel"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
   <div class=\"card\">
       <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 23
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 25
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\" id=\"form-total\" >
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 27
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"total_payment_method_fee_status\" id=\"input-status\" class=\"form-select\">
                ";
        // line 30
        if (($context["total_payment_method_fee_status"] ?? null)) {
            // line 31
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 32
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 34
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 35
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 37
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-tax-class\">";
        // line 41
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"total_payment_method_fee_tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                <option value=\"0\">";
        // line 44
        echo ($context["text_none"] ?? null);
        echo "</option>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 46) == ($context["total_payment_method_fee_tax_class_id"] ?? null))) {
                // line 47
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 47);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 47);
                echo "</option>
                ";
            } else {
                // line 49
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 49);
                echo "</option>
                ";
            }
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 56
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"total_payment_method_fee_sort_order\" value=\"";
        // line 58
        echo ($context["total_payment_method_fee_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          <legend>";
        // line 61
        echo ($context["text_rules"] ?? null);
        echo "</legend>
          <table id=\"rules\" class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left required\">";
        // line 65
        echo ($context["column_payment_method"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 66
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 67
        echo ($context["column_total"] ?? null);
        echo "<div class=\"form-text\">";
        echo ($context["help_total"] ?? null);
        echo "</div></td>
                <td class=\"text-left\">";
        // line 68
        echo ($context["column_method"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 69
        echo ($context["column_type"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 70
        echo ($context["column_value"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 71
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 72
        echo ($context["column_stores"] ?? null);
        echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
            ";
        // line 77
        $context["rule_row"] = 0;
        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["total_payment_method_fee_rules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total_payment_method_fee_rule"]) {
            // line 79
            echo "            <tr id=\"rule-row";
            echo ($context["rule_row"] ?? null);
            echo "\">
              <td class=\"text-left\">
                <select name=\"total_payment_method_fee_rules[";
            // line 81
            echo ($context["rule_row"] ?? null);
            echo "][payment_code]\" class=\"form-control\">
                <option value=\"\">";
            // line 82
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 84
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "payment_code", [], "any", false, false, false, 84) == twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 84))) {
                    // line 85
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 85);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 85);
                    echo "</option>
                  ";
                } else {
                    // line 87
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 87);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 87);
                    echo "</option>
                  ";
                }
                // line 89
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                </select>
                <div id=\"error-rules-";
            // line 91
            echo ($context["rule_row"] ?? null);
            echo "-payment-code\" class=\"invalid-feedback\"></div>
              </td>
              <td class=\"text-left\">
                <select name=\"total_payment_method_fee_rules[";
            // line 94
            echo ($context["rule_row"] ?? null);
            echo "][status]\" class=\"form-control\">
                  <option value=\"1\" ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "status", [], "any", false, false, false, 95) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "status", [], "any", false, false, false, 96) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                </select>
              </td>
              <td class=\"text-left\">
                <input type=\"text\" name=\"total_payment_method_fee_rules[";
            // line 100
            echo ($context["rule_row"] ?? null);
            echo "][total]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "total", [], "any", false, false, false, 100);
            echo "\" class=\"form-control\" />
                <div id=\"error-rules-";
            // line 101
            echo ($context["rule_row"] ?? null);
            echo "-total\" class=\"invalid-feedback\"></div>
              </td>
              <td class=\"text-left\">
                <select name=\"total_payment_method_fee_rules[";
            // line 104
            echo ($context["rule_row"] ?? null);
            echo "][method]\" class=\"form-control\">
                  <option value=\"fee\" ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "method", [], "any", false, false, false, 105) == "fee")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_fee"] ?? null);
            echo "</option>
                  <option value=\"discount\" ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "method", [], "any", false, false, false, 106) == "discount")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_discount"] ?? null);
            echo "</option>
                </select>
              </td>
              <td class=\"text-left\">
                <select name=\"total_payment_method_fee_rules[";
            // line 110
            echo ($context["rule_row"] ?? null);
            echo "][type]\" class=\"form-control\">
                  <option value=\"fixed\" ";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "type", [], "any", false, false, false, 111) == "fixed")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_fixed"] ?? null);
            echo "</option>
                  <option value=\"percentage\" ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "type", [], "any", false, false, false, 112) == "percentage")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_percentage"] ?? null);
            echo "</option>
                </select>
              </td>
              <td class=\"text-left\">
                <input type=\"text\" name=\"total_payment_method_fee_rules[";
            // line 116
            echo ($context["rule_row"] ?? null);
            echo "][value]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "value", [], "any", false, false, false, 116);
            echo "\" class=\"form-control\" size=\"5\" />
                <div id=\"error-rules-";
            // line 117
            echo ($context["rule_row"] ?? null);
            echo "-value\" class=\"invalid-feedback\"></div>
              </td>
              <td class=\"text-left\">
                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 121
                echo "                <div class=\"input-group\"> <span class=\"input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 121);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 121);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 121);
                echo "\" /></span>
                  <input type=\"text\" name=\"total_payment_method_fee_rules[";
                // line 122
                echo ($context["rule_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "][name]\" value=\"";
                echo (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "title", [], "any", false, false, false, 122)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "title", [], "any", false, false, false, 122)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122)] ?? null) : null), "name", [], "any", false, false, false, 122)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\"  class=\"form-control\" />
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "              </td>
              <td class=\"text-left\" style=\"height: 80px; overflow: auto;\">
                ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 128
                echo "                <div class=\"form-check form-switch\">
                  <label> ";
                // line 129
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 129), twig_get_attribute($this->env, $this->source, $context["total_payment_method_fee_rule"], "stores", [], "any", false, false, false, 129))) {
                    // line 130
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"total_payment_method_fee_rules[";
                    echo ($context["rule_row"] ?? null);
                    echo "][stores][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 130);
                    echo "\" checked=\"checked\" />
                    ";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 131);
                    echo "
                    ";
                } else {
                    // line 133
                    echo "                    <input type=\"checkbox\" class=\"form-check-input\" name=\"total_payment_method_fee_rules[";
                    echo ($context["rule_row"] ?? null);
                    echo "][stores][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 133);
                    echo "\" />
                    ";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 134);
                    echo "
                    ";
                }
                // line 135
                echo " 
                  </label>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "              </td>
              <td class=\"text-right\">
                <button type=\"button\" onclick=\"\$('#rule-row";
            // line 141
            echo ($context["rule_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
              </td>
            </tr>
            ";
            // line 144
            $context["rule_row"] = (($context["rule_row"] ?? null) + 1);
            // line 145
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total_payment_method_fee_rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"8\"></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"addRule();\" data-toggle=\"tooltip\" title=\"";
        // line 150
        echo ($context["button_rule_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
var rule_row = ";
        // line 159
        echo ($context["rule_row"] ?? null);
        echo ";

function addRule() {
  html  = '<tr id=\"rule-row' + rule_row + '\">';
  html += '  <td class=\"text-left\">';
  html += '    <select name=\"total_payment_method_fee_rules[' + rule_row + '][payment_code]\" class=\"form-control\">';
  html += '    <option value=\"\">";
        // line 165
        echo ($context["text_select"] ?? null);
        echo "</option>';
  ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 167
            echo "  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["method"], "code", [], "any", false, false, false, 167);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["method"], "name", [], "any", false, false, false, 167), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "  html += '    </select>';
  html += '    <div id=\"error-rules-' + rule_row + '-payment-code\" class=\"invalid-feedback\"></div>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  html += '    <select name=\"total_payment_method_fee_rules[' + rule_row + '][status]\" class=\"form-control\">';
  html += '      <option value=\"1\">";
        // line 175
        echo ($context["text_enabled"] ?? null);
        echo "</option>';
  html += '      <option value=\"0\" selected=\"selected\">";
        // line 176
        echo ($context["text_disabled"] ?? null);
        echo "</option>';
  html += '    </select>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  html += '    <input type=\"text\" name=\"total_payment_method_fee_rules[' + rule_row + '][total]\" value=\"\" class=\"form-control\" size=\"5\" />';
  html += '    <div id=\"error-rules-";
        // line 182
        echo ($context["rule_row"] ?? null);
        echo "-total\" class=\"invalid-feedback\"></div>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  html += '    <select name=\"total_payment_method_fee_rules[' + rule_row + '][method]\" class=\"form-control\">';
  html += '      <option value=\"fee\">";
        // line 187
        echo ($context["text_fee"] ?? null);
        echo "</option>';
  html += '      <option value=\"discount\">";
        // line 188
        echo ($context["text_discount"] ?? null);
        echo "</option>';
  html += '    </select>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  html += '    <select name=\"total_payment_method_fee_rules[' + rule_row + '][type]\" class=\"form-control\">';
  html += '      <option value=\"fixed\">";
        // line 194
        echo ($context["text_fixed"] ?? null);
        echo "</option>';
  html += '      <option value=\"percentage\">";
        // line 195
        echo ($context["text_percentage"] ?? null);
        echo "</option>';
  html += '    </select>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  html += '    <input type=\"text\" name=\"total_payment_method_fee_rules[' + rule_row + '][value]\" value=\"\" class=\"form-control\" size=\"5\" />';
  html += '    <div id=\"error-rules-";
        // line 201
        echo ($context["rule_row"] ?? null);
        echo "-value\" class=\"invalid-feedback\"></div>';
  html += '  </td>';

  html += '  <td class=\"text-left\">';
  ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 206
            echo "  html += '    <div class=\"input-group\"> <span class=\"input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 206);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 206);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 206);
            echo "\" /></span>';
  html += '    <input type=\"text\" name=\"total_payment_method_fee_rules[' + rule_row + '][title][";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207);
            echo "][name]\" value=\"";
            echo (((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["total_payment_method_fee_rule"] ?? null), "title", [], "any", false, false, false, 207)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["total_payment_method_fee_rule"] ?? null), "title", [], "any", false, false, false, 207)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207)] ?? null) : null), "name", [], "any", false, false, false, 207)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\"  class=\"form-control\" />';
  html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "  html += '  </td>';

  html += '  <td class=\"text-left\" style=\"height: 80px; overflow: auto;\">';
  ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 214
            echo "  html += '    <div class=\"form-check form-switch\">';
  html += '    <label>';
  html += '      <input type=\"checkbox\" class=\"form-check-input\" name=\"total_payment_method_fee_rules[' + rule_row + '][stores][]\" value=\"";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 216);
            echo "\" checked=\"checked\" />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 216), "js");
            echo "';
  html += '    </label>';
  html += '    </div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "  html += '  </td>';

  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#rule-row' + rule_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 222
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';
 
  \$('#rules tbody').append(html);

  rule_row++;
}
//--></script>
</div>
";
        // line 231
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/paymentmethodfee/admin/view/template/total/payment_method_fee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 231,  644 => 222,  640 => 220,  628 => 216,  624 => 214,  620 => 213,  615 => 210,  602 => 207,  593 => 206,  589 => 205,  582 => 201,  573 => 195,  569 => 194,  560 => 188,  556 => 187,  548 => 182,  539 => 176,  535 => 175,  527 => 169,  516 => 167,  512 => 166,  508 => 165,  499 => 159,  487 => 150,  481 => 146,  475 => 145,  473 => 144,  465 => 141,  461 => 139,  452 => 135,  447 => 134,  440 => 133,  435 => 131,  428 => 130,  426 => 129,  423 => 128,  419 => 127,  415 => 125,  400 => 122,  391 => 121,  387 => 120,  381 => 117,  375 => 116,  364 => 112,  356 => 111,  352 => 110,  341 => 106,  333 => 105,  329 => 104,  323 => 101,  317 => 100,  306 => 96,  298 => 95,  294 => 94,  288 => 91,  285 => 90,  279 => 89,  271 => 87,  263 => 85,  260 => 84,  256 => 83,  252 => 82,  248 => 81,  242 => 79,  237 => 78,  235 => 77,  227 => 72,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  205 => 67,  201 => 66,  197 => 65,  190 => 61,  182 => 58,  177 => 56,  171 => 52,  165 => 51,  157 => 49,  149 => 47,  146 => 46,  142 => 45,  138 => 44,  132 => 41,  126 => 37,  121 => 35,  116 => 34,  111 => 32,  106 => 31,  104 => 30,  98 => 27,  93 => 25,  88 => 23,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  55 => 12,  51 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/paymentmethodfee/admin/view/template/total/payment_method_fee.twig", "C:\\xampp\\htdocs\\opencart\\extension\\paymentmethodfee\\admin\\view\\template\\total\\payment_method_fee.twig");
    }
}
