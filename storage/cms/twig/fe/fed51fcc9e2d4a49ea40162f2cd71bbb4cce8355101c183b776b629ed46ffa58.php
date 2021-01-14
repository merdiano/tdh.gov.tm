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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/header.htm */
class __TwigTemplate_bd2c329b96b020146951266c9b0a8ac65b99ff21b8050cd540d99ba327a9dfc6 extends \Twig\Template
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
        $tags = array("set" => 31, "for" => 74);
        $filters = array("theme" => 8, "escape" => 15, "page" => 30, "_" => 39);
        $functions = array("url" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['theme', 'escape', 'page', '_'],
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
        echo "<!-- Header ==================== -->

<header class=\"header\">
  <div class=\"auto_container\">
    <div class=\"header_inner\">
      <div class=\"lang\">
        <div class=\"lang_icon\">
          <img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lan.svg");
        echo "\" alt=\"\" />
        </div>
        <div>
          <!-- Taze language -->
          <div class=\"select_language\">
            <div class=\"current_lang\">
              <div>
                <a href=\"#\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocaleName"] ?? null), 15, $this->source), "html", null, true);
        echo " </a>
              </div>
              <div class=\"pyramid\">
                <img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/strelka.svg");
        echo "\" alt=\"\" />
              </div>
            </div>
            <div class=\"languages\">
              <a href=\"";
        // line 22
        echo url("/ru");
        echo "\"> Русский </a>
              <a href=\"";
        // line 23
        echo url("/tm");
        echo "\"> Türkmen </a>
              <a href=\"";
        // line 24
        echo url("/en");
        echo "\"> English </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"logo\">
        <a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
          ";
        // line 31
        $context["logo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 31), ("logo_" . $this->sandbox->ensureToStringAllowed(($context["activeLocale"] ?? null), 31, $this->source)), [], "any", false, false, true, 31);
        // line 32
        echo "
          <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["logo"] ?? null), "path", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\" alt=\"\" />
        </a>
      </div>
      <div class=\"head_right\">
        <form action=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" class=\"form\" method=\"GET\">
          <div class=\"input\">
            <input type=\"text\" name=\"q\" placeholder=\"";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Поиск"]);
        echo "\" />
          </div>
          <button class=\"search\">
            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lupa.svg");
        echo "\" alt=\"\" />
          </button>
        </form>
      </div>
      <button type=\"button\" class=\"hamburg\">
        <span></span>
      </button>
    </div>
  </div>
  <!-- auto_container -->
  <div class=\"navs_section\" id=\"nav\">
    <div class=\"auto_container\">
      <div class=\"navs_inner\">
        <!-- taze -->
        <div class=\"search_mobile\">
          <form action=\"#\" class=\"form\">
            <div class=\"input\">
              <input type=\"text\" placeholder=\"";
        // line 59
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Поиск"]);
        echo "\" />
            </div>
            <button class=\"search\">
              <img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lupa.svg");
        echo "\" alt=\"\" />
            </button>
          </form>
        </div>
        <div class=\"menu\">
          <div class=\"span\"></div>
          <div class=\"menu_text\">
            <div class=\"hover_menu\">Разделы</div>
            <!-- ";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categories"] ?? null), 70, $this->source), "html", null, true);
        echo " -->
          </div>
        </div>
        <div class=\"hide_menu\">
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "          <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 75)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "          <!-- <a href=\"#\">
                        Политика
                    </a> -->
        </div>
        <nav class=\"navs\">
          <div class=\"link\">
            <span class=\"icons\">
              <img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/inbox.svg");
        echo "\" alt=\"\" />
            </span>
            <a href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("archive");
        echo "\" class=\"nav_link\"> Архив </a>
          </div>
          <div class=\"stick\"></div>
          <div class=\"link link_media\">
            <div class=\"icons\">
              <img src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/film.svg");
        echo "\" alt=\"\" />
            </div>
            <div class=\"nav_link\">
              <div class=\"hover_media\">Мультимедиа</div>
            </div>
          </div>
          <div class=\"hide_media\">
            <a href=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\"> Фоторепортаж </a>
            
            <a href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("videos");
        echo "\"> Видеорепортаж </a>
          </div>
          <div class=\"stick\"></div>
          <div class=\"link\">
            <div class=\"icons\">
              <img src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phone-call.svg");
        echo "\" alt=\"\" />
            </div>
            <a href=\"#\" class=\"nav_link\"> Обратная связь </a>
          </div>
        </nav>
        <div class=\"langMobile\">
          <div class=\"lang_icon\">
            <img src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lan.svg");
        echo "\" alt=\"\" />
          </div>
          <div class=\"select_language2\">
            <div class=\"current_langMobile\">
              <div>
                <a href=\"#\"> ";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocaleName"] ?? null), 117, $this->source), "html", null, true);
        echo " </a>
              </div>
              <div class=\"pyramid\">
                <img
                  src=\"";
        // line 121
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/whitePyramid.svg");
        echo "\"
                  alt=\"\"
                />
              </div>
            </div>
          </div>
        </div>
        <div class=\"languagesMobile\">
          <a href=\"";
        // line 129
        echo url("/ru");
        echo "\"> Русский </a>
          <a href=\"";
        // line 130
        echo url("/tm");
        echo "\"> Türkmen </a>
          <a href=\"";
        // line 131
        echo url("/en");
        echo "\"> English </a>
        </div>
      </div>
    </div>
    <!-- auto_container -->
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 131,  282 => 130,  278 => 129,  267 => 121,  260 => 117,  252 => 112,  242 => 105,  234 => 100,  229 => 98,  219 => 91,  211 => 86,  206 => 84,  197 => 77,  186 => 75,  182 => 74,  175 => 70,  164 => 62,  158 => 59,  138 => 42,  132 => 39,  127 => 37,  120 => 33,  117 => 32,  115 => 31,  111 => 30,  102 => 24,  98 => 23,  94 => 22,  87 => 18,  81 => 15,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Header ==================== -->

<header class=\"header\">
  <div class=\"auto_container\">
    <div class=\"header_inner\">
      <div class=\"lang\">
        <div class=\"lang_icon\">
          <img src=\"{{ 'assets/images/lan.svg'|theme }}\" alt=\"\" />
        </div>
        <div>
          <!-- Taze language -->
          <div class=\"select_language\">
            <div class=\"current_lang\">
              <div>
                <a href=\"#\"> {{activeLocaleName}} </a>
              </div>
              <div class=\"pyramid\">
                <img src=\"{{ 'assets/images/strelka.svg'|theme }}\" alt=\"\" />
              </div>
            </div>
            <div class=\"languages\">
              <a href=\"{{ url('/ru') }}\"> Русский </a>
              <a href=\"{{ url('/tm') }}\"> Türkmen </a>
              <a href=\"{{ url('/en') }}\"> English </a>
            </div>
          </div>
        </div>
      </div>
      <div class=\"logo\">
        <a href=\"{{ 'home'|page}}\">
          {% set logo = attribute(this.theme, 'logo_' ~ activeLocale) %}

          <img src=\"{{logo.path}}\" alt=\"\" />
        </a>
      </div>
      <div class=\"head_right\">
        <form action=\"{{ 'search'|page }}\" class=\"form\" method=\"GET\">
          <div class=\"input\">
            <input type=\"text\" name=\"q\" placeholder=\"{{'Поиск'|_}}\" />
          </div>
          <button class=\"search\">
            <img src=\"{{ 'assets/images/lupa.svg'|theme }}\" alt=\"\" />
          </button>
        </form>
      </div>
      <button type=\"button\" class=\"hamburg\">
        <span></span>
      </button>
    </div>
  </div>
  <!-- auto_container -->
  <div class=\"navs_section\" id=\"nav\">
    <div class=\"auto_container\">
      <div class=\"navs_inner\">
        <!-- taze -->
        <div class=\"search_mobile\">
          <form action=\"#\" class=\"form\">
            <div class=\"input\">
              <input type=\"text\" placeholder=\"{{'Поиск'|_}}\" />
            </div>
            <button class=\"search\">
              <img src=\"{{ 'assets/images/lupa.svg'|theme }}\" alt=\"\" />
            </button>
          </form>
        </div>
        <div class=\"menu\">
          <div class=\"span\"></div>
          <div class=\"menu_text\">
            <div class=\"hover_menu\">Разделы</div>
            <!-- {{categories}} -->
          </div>
        </div>
        <div class=\"hide_menu\">
          {% for item in categories %}
          <a href=\"{{ 'category'|page({ slug: item.slug })}}\">{{item.name}}</a>
          {% endfor %}
          <!-- <a href=\"#\">
                        Политика
                    </a> -->
        </div>
        <nav class=\"navs\">
          <div class=\"link\">
            <span class=\"icons\">
              <img src=\"{{ 'assets/images/inbox.svg'|theme }}\" alt=\"\" />
            </span>
            <a href=\"{{ 'archive'|page }}\" class=\"nav_link\"> Архив </a>
          </div>
          <div class=\"stick\"></div>
          <div class=\"link link_media\">
            <div class=\"icons\">
              <img src=\"{{ 'assets/images/film.svg'|theme }}\" alt=\"\" />
            </div>
            <div class=\"nav_link\">
              <div class=\"hover_media\">Мультимедиа</div>
            </div>
          </div>
          <div class=\"hide_media\">
            <a href=\"{{ 'gallery'|page}}\"> Фоторепортаж </a>
            
            <a href=\"{{ 'videos'|page}}\"> Видеорепортаж </a>
          </div>
          <div class=\"stick\"></div>
          <div class=\"link\">
            <div class=\"icons\">
              <img src=\"{{ 'assets/images/phone-call.svg'|theme }}\" alt=\"\" />
            </div>
            <a href=\"#\" class=\"nav_link\"> Обратная связь </a>
          </div>
        </nav>
        <div class=\"langMobile\">
          <div class=\"lang_icon\">
            <img src=\"{{ 'assets/images/lan.svg'|theme }}\" alt=\"\" />
          </div>
          <div class=\"select_language2\">
            <div class=\"current_langMobile\">
              <div>
                <a href=\"#\"> {{activeLocaleName}} </a>
              </div>
              <div class=\"pyramid\">
                <img
                  src=\"{{ 'assets/images/whitePyramid.svg'|theme }}\"
                  alt=\"\"
                />
              </div>
            </div>
          </div>
        </div>
        <div class=\"languagesMobile\">
          <a href=\"{{ url('/ru') }}\"> Русский </a>
          <a href=\"{{ url('/tm') }}\"> Türkmen </a>
          <a href=\"{{ url('/en') }}\"> English </a>
        </div>
      </div>
    </div>
    <!-- auto_container -->
  </div>
</header>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/header.htm", "");
    }
}
