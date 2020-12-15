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

/* C:\xampp\htdocs\tdh/themes/tttttdh/partials/header.htm */
class __TwigTemplate_842da7f0bb86ed14a2f944cc70f25549fc785f840a28186e11c91a4a8aa8ba23 extends \Twig\Template
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
        $tags = array("for" => 38);
        $filters = array("theme" => 7, "page" => 18, "escape" => 39);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['theme', 'page', 'escape'],
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
        echo "<div class=\"top__bground\"></div>
    <div class=\"bg__white\"></div>
    <header class=\"header\">
        <div class=\"header__inner\">
            <div class=\"header__logo\">
                <a href=\"#\">
                    <img src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Logo-2.png");
        echo "\" alt=\"Logo\">
                </a>
                <div class=\"ham\" onclick=\"showFunction()\">
                    <div class=\"ham__btn\" id=\"ham\"></div>
                    <div class=\"ham__btn1\" id=\"ham1\"></div>
                    <div class=\"ham__btn2\" id=\"ham2\"></div>
                </div>
            </div> <!-- header__logo -->
        </div> <!-- header__inner -->
        <div class=\"container\">
            <div class=\"header__search \">
                <form action=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
                     
                    <input name=\"q\"type=\"search\" placeholder=\"Поиск\" class=\"poisk\">
                    <button type=\"submit\">Search</button>
                </form>
                <!-- <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/search.svg");
        echo "\" class=\"lupa\"> -->
            </div>
        </div>

        <div class=\"nav__header\">
            <div class=\"container\">
                <div class=\"js__menu\" id=\"dropDown\">

                    <div class=\"js__menu-inner\">
                        <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" >Главная</a>
                    </div>
                    <div class=\"drop__link\">
                        <a href=\"#\">Разделы</a>
                        <div class=\"main__link-list\">
                            
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                                <a href=\"#\" class=\"just__link\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            
                        </div>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"#\">Комментарии</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"new__single-page.html\">2020 год - Туркменистан - родина Нейтралитета</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">Мультимедиа</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"contact__us.html\">Обратная связь</a>
                    </div>

                    <div class=\"flag__row\">
                        <button class=\"flag \">
                            <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___10.png");
        echo "\" alt=\"\" />
                        </button>
                        <div class=\"devider2\"></div>

                        <button class=\"flag \">
                            <img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___9.png");
        echo "\" alt=\"\" />
                        </button>
                        <div class=\"devider2\"></div>

                        <button class=\"flag\">
                            <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___4.png");
        echo "\" alt=\"\" />
                        </button>
                    </div>

                </div><!-- js-menu -->
            </div><!-- container -->
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  157 => 64,  149 => 59,  138 => 51,  126 => 41,  117 => 39,  113 => 38,  104 => 32,  92 => 23,  84 => 18,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top__bground\"></div>
    <div class=\"bg__white\"></div>
    <header class=\"header\">
        <div class=\"header__inner\">
            <div class=\"header__logo\">
                <a href=\"#\">
                    <img src=\"{{ 'assets/images/Logo-2.png'|theme }}\" alt=\"Logo\">
                </a>
                <div class=\"ham\" onclick=\"showFunction()\">
                    <div class=\"ham__btn\" id=\"ham\"></div>
                    <div class=\"ham__btn1\" id=\"ham1\"></div>
                    <div class=\"ham__btn2\" id=\"ham2\"></div>
                </div>
            </div> <!-- header__logo -->
        </div> <!-- header__inner -->
        <div class=\"container\">
            <div class=\"header__search \">
                <form action=\"{{ 'search' | page }}\" method=\"get\">
                     
                    <input name=\"q\"type=\"search\" placeholder=\"Поиск\" class=\"poisk\">
                    <button type=\"submit\">Search</button>
                </form>
                <!-- <img src=\"{{ 'assets/images/search.svg'|theme }}\" class=\"lupa\"> -->
            </div>
        </div>

        <div class=\"nav__header\">
            <div class=\"container\">
                <div class=\"js__menu\" id=\"dropDown\">

                    <div class=\"js__menu-inner\">
                        <a href=\"{{ 'home'|page}}\" >Главная</a>
                    </div>
                    <div class=\"drop__link\">
                        <a href=\"#\">Разделы</a>
                        <div class=\"main__link-list\">
                            
                            {% for item in categories %}
                                <a href=\"#\" class=\"just__link\">{{item.name}}</a>
                            {% endfor %}
                            
                        </div>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"#\">Комментарии</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"new__single-page.html\">2020 год - Туркменистан - родина Нейтралитета</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"{{ 'gallery'|page}}\">Мультимедиа</a>
                    </div>
                    <div class=\"js__menu-inner\">
                        <a href=\"contact__us.html\">Обратная связь</a>
                    </div>

                    <div class=\"flag__row\">
                        <button class=\"flag \">
                            <img src=\"{{ 'assets/images/NoPath___10.png'|theme }}\" alt=\"\" />
                        </button>
                        <div class=\"devider2\"></div>

                        <button class=\"flag \">
                            <img src=\"{{ 'assets/images/NoPath___9.png'|theme }}\" alt=\"\" />
                        </button>
                        <div class=\"devider2\"></div>

                        <button class=\"flag\">
                            <img src=\"{{ 'assets/images/NoPath___4.png'|theme }}\" alt=\"\" />
                        </button>
                    </div>

                </div><!-- js-menu -->
            </div><!-- container -->
        </div>
    </header>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/header.htm", "");
    }
}
