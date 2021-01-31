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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/home_colleage_news.htm */
class __TwigTemplate_0fd92592ff725362756d9cfda3cc5acdeb523dc91fb292fd8be09b9ca552482f extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 10, "set" => 12);
        $filters = array("escape" => 4, "split" => 12, "page" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'split', 'page'],
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
        if ((($context["currentLanguage"] ?? null) == "ru")) {
            // line 2
            echo "    <div class=\"right\">
        <div class=\"title\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
        </div>
        
        ";
            // line 7
            if ((($context["imageType"] ?? null) == "horizontal")) {
                // line 8
                echo "            <div class=\"scroll\">
                
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collegueNews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "                <div class=\"right_news\">
                    ";
                    // line 12
                    $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 12), 12, $this->source), ":");
                    // line 13
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "/post/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo "\" class=\"right_title\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["foo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), 14, $this->source), "html", null, true);
                    echo "
                    </a>
                    <div class=\"right_text\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["foo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), 17, $this->source), "html", null, true);
                    echo "
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "            </div>
        
        ";
            } else {
                // line 24
                echo "
            <div class=\"scroll_vertical\">
                    
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collegueNews"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "                <div class=\"right_news\">
                    ";
                    // line 29
                    $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 29), 29, $this->source), ":");
                    // line 30
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "/post/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "\" class=\"right_title\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["foo"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), 31, $this->source), "html", null, true);
                    echo "
                    </a>
                    <div class=\"right_text\">
                        ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["foo"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), 34, $this->source), "html", null, true);
                    echo "
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </div>
        
        ";
            }
            // line 41
            echo "    </div>
";
        } else {
            // line 43
            echo "    <div class=\"right\">
        <div class=\"title\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat2"] ?? null), "name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
        </div>
        
        ";
            // line 48
            if ((($context["imageType"] ?? null) == "horizontal")) {
                // line 49
                echo "            <div class=\"scroll\">
                
                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collegueNews2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    echo "                <div class=\"right_news\">
                    ";
                    // line 53
                    $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), ":");
                    // line 54
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "/post/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "\" class=\"right_title\">
                        ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["foo"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), 55, $this->source), "html", null, true);
                    echo "
                    </a>
                    <div class=\"right_text\">
                        ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["foo"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), 58, $this->source), "html", null, true);
                    echo "
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "            </div>
        
        ";
            } else {
                // line 65
                echo "
            <div class=\"scroll_vertical\">
                    
                ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["collegueNews2"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 69
                    echo "                <div class=\"right_news\">
                    ";
                    // line 70
                    $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 70), 70, $this->source), ":");
                    // line 71
                    echo "                    <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "/post/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo "\" class=\"right_title\">
                        ";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["foo"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), 72, $this->source), "html", null, true);
                    echo "
                    </a>
                    <div class=\"right_text\">
                        ";
                    // line 75
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["foo"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[1] ?? null) : null), 75, $this->source), "html", null, true);
                    echo "
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "            </div>
        
        ";
            }
            // line 82
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_colleage_news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 82,  261 => 79,  251 => 75,  245 => 72,  236 => 71,  234 => 70,  231 => 69,  227 => 68,  222 => 65,  217 => 62,  207 => 58,  201 => 55,  192 => 54,  190 => 53,  187 => 52,  183 => 51,  179 => 49,  177 => 48,  171 => 45,  167 => 43,  163 => 41,  158 => 38,  148 => 34,  142 => 31,  133 => 30,  131 => 29,  128 => 28,  124 => 27,  119 => 24,  114 => 21,  104 => 17,  98 => 14,  89 => 13,  87 => 12,  84 => 11,  80 => 10,  76 => 8,  74 => 7,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if currentLanguage == \"ru\" %}
    <div class=\"right\">
        <div class=\"title\">
            {{cat.name}}
        </div>
        
        {% if imageType == \"horizontal\" %}
            <div class=\"scroll\">
                
                {% for item in collegueNews %}
                <div class=\"right_news\">
                    {% set foo = item.title|split(':') %}
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                        {{foo[0]}}
                    </a>
                    <div class=\"right_text\">
                        {{foo[1]}}
                    </div>
                </div>
                {% endfor %}
            </div>
        
        {% else %}

            <div class=\"scroll_vertical\">
                    
                {% for item in collegueNews %}
                <div class=\"right_news\">
                    {% set foo = item.title|split(':') %}
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                        {{foo[0]}}
                    </a>
                    <div class=\"right_text\">
                        {{foo[1]}}
                    </div>
                </div>
                {% endfor %}
            </div>
        
        {% endif %}
    </div>
{% else %}
    <div class=\"right\">
        <div class=\"title\">
            {{cat2.name}}
        </div>
        
        {% if imageType == \"horizontal\" %}
            <div class=\"scroll\">
                
                {% for item in collegueNews2 %}
                <div class=\"right_news\">
                    {% set foo = item.title|split(':') %}
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                        {{foo[0]}}
                    </a>
                    <div class=\"right_text\">
                        {{foo[1]}}
                    </div>
                </div>
                {% endfor %}
            </div>
        
        {% else %}

            <div class=\"scroll_vertical\">
                    
                {% for item in collegueNews2 %}
                <div class=\"right_news\">
                    {% set foo = item.title|split(':') %}
                    <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                        {{foo[0]}}
                    </a>
                    <div class=\"right_text\">
                        {{foo[1]}}
                    </div>
                </div>
                {% endfor %}
            </div>
        
        {% endif %}
    </div>
{% endif %}", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_colleage_news.htm", "");
    }
}
