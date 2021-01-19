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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/home_intro.htm */
class __TwigTemplate_945b22f5916148fbb1be8d17502cc4b7fcc8bc4f3335225ae30e0ccf94727efe extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 5);
        $filters = array("escape" => 10, "page" => 17, "raw" => 21, "date" => 25);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'page', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 1
        echo "<div class=\"main\">
    <div class=\"title\">
        В центре событий
    </div>
    ";
        // line 5
        if ((($context["imageType"] ?? null) == "vertical")) {
            // line 6
            echo "    <div class=\"vertical_type\">
        <div class=\"vertical_photo\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 8)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 8)) {
                // line 9
                echo "                <div class=\"main_photo\">
                    <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 10)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" alt=\"\">
                </div>
            ";
            }
            // line 13
            echo "        </div>
        <div class=\"vertical_text\">
            <div class=\"main_title\">
                
                <a href=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "slug", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a>
            </div>
            <div class=\"main_text\">
                
                ";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "introductory", [], "any", false, false, true, 21), 21, $this->source);
            echo " 
            </div>
            <div class=\"main_end\">
                <div class=\"main_date\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "published_at", [], "any", false, false, true, 25), 25, $this->source), "d.m.Y"), "html", null, true);
            echo "
                </div>
                <div class=\"main_link\">
                    <a href=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "slug", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    ";
        } else {
            // line 37
            echo "        

        <div class=\"main_part\">
            ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 40)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "path", [], "any", false, false, true, 40)) {
                // line 41
                echo "                <div class=\"main_photo\">
                    <img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 42)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "path", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" alt=\"\">
                </div>
            ";
            }
            // line 45
            echo "            <div class=\"main_title\">
                <a href=\"";
            // line 46
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "slug", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</a>
            </div>
            <div class=\"main_text\">
                ";
            // line 49
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "introductory", [], "any", false, false, true, 49), 49, $this->source);
            echo " 
            </div>
            <div class=\"main_end\">
                <div class=\"main_date\">
                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "published_at", [], "any", false, false, true, 53), 53, $this->source), "d.m.Y"), "html", null, true);
            echo "
                </div>
                <div class=\"main_link\">
                    <a href=\"";
            // line 56
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "slug", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "\">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    
    ";
        }
        // line 64
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_intro.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 64,  171 => 56,  165 => 53,  158 => 49,  148 => 46,  145 => 45,  139 => 42,  136 => 41,  134 => 40,  129 => 37,  115 => 28,  109 => 25,  102 => 21,  91 => 17,  85 => 13,  79 => 10,  76 => 9,  74 => 8,  70 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main\">
    <div class=\"title\">
        В центре событий
    </div>
    {% if imageType == \"vertical\" %}
    <div class=\"vertical_type\">
        <div class=\"vertical_photo\">
            {% if postFeatured.images[0].path %}
                <div class=\"main_photo\">
                    <img src=\"{{ postFeatured.images[0].path }}\" alt=\"\">
                </div>
            {% endif %}
        </div>
        <div class=\"vertical_text\">
            <div class=\"main_title\">
                
                <a href=\"{{ ''| page}}/post/{{postFeatured.slug}}\">{{ postFeatured.title }}</a>
            </div>
            <div class=\"main_text\">
                
                {{ postFeatured.introductory|raw }} 
            </div>
            <div class=\"main_end\">
                <div class=\"main_date\">
                    {{ postFeatured.published_at| date(\"d.m.Y\") }}
                </div>
                <div class=\"main_link\">
                    <a href=\"{{ ''| page}}/post/{{postFeatured.slug}}\">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    {% else %}
        

        <div class=\"main_part\">
            {% if postFeatured.images[0].path %}
                <div class=\"main_photo\">
                    <img src=\"{{ postFeatured.images[0].path }}\" alt=\"\">
                </div>
            {% endif %}
            <div class=\"main_title\">
                <a href=\"{{ ''| page}}/post/{{postFeatured.slug}}\">{{ postFeatured.title }}</a>
            </div>
            <div class=\"main_text\">
                {{ postFeatured.introductory|raw }} 
            </div>
            <div class=\"main_end\">
                <div class=\"main_date\">
                    {{ postFeatured.published_at| date(\"d.m.Y\") }}
                </div>
                <div class=\"main_link\">
                    <a href=\"{{ ''| page}}/post/{{postFeatured.slug}}\">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    
    {% endif %}
</div>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_intro.htm", "");
    }
}
