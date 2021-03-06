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

/* themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig */
class __TwigTemplate_ebc3735aa8eaf5b13bd84ca7313e9073df7b69665cf694d238434ca624c90b55 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<table class=\"cart-block--offcanvas-cart-table table\">
  <tbody>
  <% _.each(cart.order_items, function(orderItem, key) { %>
  <tr>
    <td class=\"cart-block--offcanvas-cart-table__title\"><%- orderItem.title %></td>
    <td class=\"cart-block--offcanvas-cart-table__quantity\">
      <input class=\"form-control\" type=\"number\" min=\"0\" data-key=\"<% print(key) %>\" value=\"<% print(parseInt(orderItem.quantity)) %>\" />
    </td>
    <td class=\"cart-block--offcanvas-cart-table__price\"><%= orderItem.total_price.formatted %></td>
    <td class=\"cart-block--offcanvas-cart-table__remove\">
      <button value=\"<% print(JSON.stringify([cart.order_id, orderItem.order_item_id]))  %>\" class=\"btn-link\"><i class=\"glyph glyph-close\"></i></button>
    </td>
  </tr>
  <% }) %>
  </tbody>
  <tfoot>
  <td class=\"text-right\" colspan=\"4\">
    <button type=\"submit\" class=\"cart-block--offcanvas-contents__update btn-link\"><i class=\"glyph glyph-refresh\"></i>Update quantities</button>
  </td>
  </tfoot>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-offcanvas-contents-items.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\custom\\christmas\\templates\\commerce\\cart\\commerce-cart-flyout-offcanvas-contents-items.html.twig");
    }
}
