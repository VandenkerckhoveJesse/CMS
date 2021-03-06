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

/* themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig */
class __TwigTemplate_0b5642e22b45765b4b16f0bc032dfef25272ae4dc185bd8f1bfc4a31d19125b1 extends \Twig\Template
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
        echo "<div class=\"product--rendered-attribute fieldgroup form-composite form-item js-form-item form-wrapper js-form-wrapper panel panel-default\">
  <div class=\"panel-heading\">
    <div class=\"panel-title form-required\"><%= label %></div>
  </div>
  <div class=\"panel-body\">
    <div>
      <% _.each(attributeValues, function(currentValue, key) { %>
      <div class=\"form-item js-form-item form-type-radio js-form-type-radio form-item-purchased-entity-attributes-attribute-<%= attributeId %> js-form-item-purchased-entity-attributes-attribute-<%= attributeId %> radio\">
        <input data-drupal-selector=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>\" class=\"form-radio\" type=\"radio\" id=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>-<%= currentValue.attribute_value_id %>\" name=\"attribute_<%= attributeId %>\" value=\"<%= currentValue.attribute_value_id %>\" <%= (activeValue === currentValue.attribute_value_id) ? 'checked' : '' %>>
        <label for=\"edit-purchased-entity-attributes-attribute-<%= attributeId %>-<%= currentValue.attribute_value_id %>\" class=\"control-label option\">
          <% print (currentValue.output) %>
        </label>
      </div>
      <% }); %>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig";
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
        return new Source("", "themes/custom/christmas/templates/commerce/cart/commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\custom\\christmas\\templates\\commerce\\cart\\commerce-cart-flyout-add-to-cart-attributes-rendered.html.twig");
    }
}
