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

/* themes/custom/christmas/templates/commerce/commerce-demo-frontpage.html.twig */
class __TwigTemplate_f06879e609f3fc368235212b392575aa6f82cae550dbbc59c2d5f1a1b53ba0ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 10];
        $filters = ["t" => 6, "escape" => 12];
        $functions = ["render_var" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
                ['render_var']
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
        echo "<div class=\"container-fluid\">
  <div class=\"container\">
    <div class=\"featured-products\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h2 class=\"h1 text-align-center line\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Featured products"));
        echo "</h2>
        </div>
      </div>
      <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured_product"]) {
            // line 11
            echo "          <div class=\"featured-seller col-md-4\">
            ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["featured_product"])), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </div>
    </div>
  </div>
</div>
<div class=\"testimonial container-fluid well well-lg well-primary\">
  <div class=\"container\">
    <div class=\"text-align-center row\">
      <div class=\"col-xs-10 col-xs-push-1\">
        <p class=\"testimonial__text h2\">The sweaters and other clothing items on this store are awesome!</p>
        <div class=\"testimonial__rating\">
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star\"></i>
          <i class=\"glyphicon glyphicon-star-empty\"></i>
        </div>
        <p>Nikola White, customer</p>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/christmas/templates/commerce/commerce-demo-frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  76 => 12,  73 => 11,  69 => 10,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/christmas/templates/commerce/commerce-demo-frontpage.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\custom\\christmas\\templates\\commerce\\commerce-demo-frontpage.html.twig");
    }
}
