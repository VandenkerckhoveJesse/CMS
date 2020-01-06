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

/* themes/custom/christmas/templates/system/page--frontpage.html.twig */
class __TwigTemplate_05e4413657dec971c7c154d14957435c330df498720398388ddbbf0285612c9f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7, "block" => 15];
        $filters = ["escape" => 9, "without" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'without'],
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/christmas/templates/system/page--frontpage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        // line 5
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
      ";
        // line 7
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 8
            echo "        <div id=\"off-canvas\" class=\"side-flyout collapse left\">
          ";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 12
        echo "
      ";
        // line 14
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 15
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 18
            echo "      ";
        }
        // line 19
        echo "

      ";
        // line 22
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 23
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 28
            echo "      ";
        }
        // line 29
        echo "
      <div class=\"row\">
        ";
        // line 32
        echo "        <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">

          ";
        // line 35
        echo "          ";
        if (($context["action_links"] ?? null)) {
            // line 36
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 39
            echo "          ";
        }
        // line 40
        echo "
          ";
        // line 42
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 43
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 46
            echo "          ";
        }
        // line 47
        echo "
          ";
        // line 49
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        </section>
      </div>
    </div>
  </div>
";
    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
        ";
    }

    // line 23
    public function block_highlighted($context, array $blocks = [])
    {
        // line 24
        echo "          <div class=\"container\">
            <div class=\"highlighted\">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          </div>
          ";
    }

    // line 36
    public function block_action_links($context, array $blocks = [])
    {
        // line 37
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
            ";
    }

    // line 43
    public function block_help($context, array $blocks = [])
    {
        // line 44
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
            ";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        // line 50
        echo "            <a id=\"main-content\"></a>
            ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "belgrade_page_title"), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/christmas/templates/system/page--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 51,  203 => 50,  200 => 49,  193 => 44,  190 => 43,  183 => 37,  180 => 36,  173 => 25,  170 => 24,  167 => 23,  160 => 16,  157 => 15,  149 => 53,  146 => 49,  143 => 47,  140 => 46,  137 => 43,  134 => 42,  131 => 40,  128 => 39,  125 => 36,  122 => 35,  116 => 32,  112 => 29,  109 => 28,  106 => 23,  103 => 22,  99 => 19,  96 => 18,  93 => 15,  90 => 14,  87 => 12,  81 => 9,  78 => 8,  75 => 7,  72 => 5,  69 => 4,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/christmas/templates/system/page--frontpage.html.twig", "C:\\xampp\\htdocs\\demo-commerce\\web\\themes\\custom\\christmas\\templates\\system\\page--frontpage.html.twig");
    }
}
