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

/* themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig */
class __TwigTemplate_aa815f5320ff36e3683632741f78004bdad025e662c101f0e772b6693c61d1c5 extends \Twig\Template
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
        echo "<div class=\"form-item js-form-item form-type-select js-form-type-select form-item-purchased-entity-attributes-attribute-<%= attributeId %> js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> form-group\">
  <label for=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" class=\"control-label js-form-required form-required\"><%= label %></label>
  <div class=\"select-wrapper\">
    <select id=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" name=\"attribute_<%= attributeId %>\" class=\"form-select required form-control\" required=\"required\" aria-required=\"true\">
      <% _.each(attributeValues, function(currentValue, key) { %>
      <option value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'selected=\"selected\"' : '' %>>
      <%= currentValue.name %>
      </option>
      <% }); %>
    </select>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig";
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
        return new Source("", "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-select.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\custom\\christmas\\templates\\commerce\\cart\\commerce-cart-flyout-add-to-cart-attributes-select.html.twig");
    }
}
