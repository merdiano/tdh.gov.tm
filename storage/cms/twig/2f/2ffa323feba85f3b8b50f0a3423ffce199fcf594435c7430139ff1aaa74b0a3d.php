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
        $filters = array("theme" => 7, "page" => 18, "_" => 32, "escape" => 39);
        $functions = array("url" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['theme', 'page', '_', 'escape'],
                ['url']
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
        echo "\" >";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Главная"]);
        echo "</a>
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
                        <a href=\"";
        // line 58
        echo url("/ru");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">

                            <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___10.png");
        echo "\" alt=\"\" />

                        </a>

                        <div class=\"devider2\"></div>

                        <a href=\"";
        // line 66
        echo url("/en");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">

                            <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___9.png");
        echo "\" alt=\"\" />

                        </a>
                        <div class=\"devider2\"></div>

                        <a href=\"";
        // line 73
        echo url("/tm");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'tm'\">

                            <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___4.png");
        echo "\" alt=\"\" />

                        </a>

<!--                        <a href=\"";
        // line 79
        echo url("/changeLanguage/ru");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___10.png");
        echo "\" alt=\"\" />-->

<!--                        </a>-->
<!--                        -->
<!--                        <div class=\"devider2\"></div>-->

<!--                        <a href=\"";
        // line 88
        echo url("/changeLanguage/en");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___9.png");
        echo "\" alt=\"\" />-->

<!--                        </a>-->
<!--                        <div class=\"devider2\"></div>-->

<!--                        <a href=\"";
        // line 96
        echo url("/changeLanguage/tm");
        echo "\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'tm'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/NoPath___4.png");
        echo "\" alt=\"\" />-->

<!--                        </a>-->
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
        return array (  224 => 99,  218 => 96,  210 => 91,  204 => 88,  195 => 82,  189 => 79,  182 => 75,  177 => 73,  169 => 68,  164 => 66,  155 => 60,  150 => 58,  140 => 51,  128 => 41,  119 => 39,  115 => 38,  104 => 32,  92 => 23,  84 => 18,  70 => 7,  62 => 1,);
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
                        <a href=\"{{ 'home'|page}}\" >{{\"Главная\"|_}}</a>
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
                        <a href=\"{{ url('/ru') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">

                            <img src=\"{{ 'assets/images/NoPath___10.png'|theme }}\" alt=\"\" />

                        </a>

                        <div class=\"devider2\"></div>

                        <a href=\"{{ url('/en') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">

                            <img src=\"{{ 'assets/images/NoPath___9.png'|theme }}\" alt=\"\" />

                        </a>
                        <div class=\"devider2\"></div>

                        <a href=\"{{ url('/tm') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'tm'\">

                            <img src=\"{{ 'assets/images/NoPath___4.png'|theme }}\" alt=\"\" />

                        </a>

<!--                        <a href=\"{{ url('/changeLanguage/ru') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'ru'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"{{ 'assets/images/NoPath___10.png'|theme }}\" alt=\"\" />-->

<!--                        </a>-->
<!--                        -->
<!--                        <div class=\"devider2\"></div>-->

<!--                        <a href=\"{{ url('/changeLanguage/en') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"{{ 'assets/images/NoPath___9.png'|theme }}\" alt=\"\" />-->

<!--                        </a>-->
<!--                        <div class=\"devider2\"></div>-->

<!--                        <a href=\"{{ url('/changeLanguage/tm') }}\" class=\"flag\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'tm'\">-->
<!--                            &lt;!&ndash; <button class=\"flag \">-->
<!--                            </button> &ndash;&gt;-->
<!--                            <img src=\"{{ 'assets/images/NoPath___4.png'|theme }}\" alt=\"\" />-->

<!--                        </a>-->
                    </div>

                </div><!-- js-menu -->
            </div><!-- container -->
        </div>
    </header>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/header.htm", "");
    }
}
