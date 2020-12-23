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

/* C:\xampp\htdocs\tdh/themes/tttttdh/pages/post.htm */
class __TwigTemplate_a4bf63e80f806dc91d1806ee18f9ed6813c4cded07253675b8a33f79e09ffc93 extends \Twig\Template
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
        $tags = array("component" => 1);
        $filters = array("escape" => 10, "date" => 17, "media" => 34);
        $functions = array("url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape', 'date', 'media'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<div class=\"container\">
    <div class=\"info\">
        <div class=\"info__inner\">
            <!---------------------------------------------------------- -->
            <div class=\"info__content\">
                <div class=\"info__content-inner\">
                    <div class=\"title\">
                        ";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
                    </div>
                    <hr>
                    <div class=\"main__title\">
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"views\">
                        ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 17), 17, $this->source), "d.m.Y"), "html", null, true);
        echo " | 1047 - просмотров
                    </div><!-- views -->
                    
                    <div class=\"slider\" id=\"slider\">
                        <!-- ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo " -->
                        aaa
                        <div class=\"slider__big\">
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 27)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"";
        // line 34
        echo url("/");
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, true, 34)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), 34, $this->source));
        echo "\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___40.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___42.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider__mini -->
                        <div class=\"slider__mini\">
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___31.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___40.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___42.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                </div>
                            </div>
                        </div>
                    </div><!-- slider -->

                    <section class=\"main__news-text\">
                        <p class=\"mini__text\">
                            <!-- ";
        // line 92
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "                           -->
                        </p>
                       
                     </section>
                     
                </div><!-- info__content-inner -->
            </div><!-- info__content -->
            
          <!-- -------------------------------------------------------- -->
            <div class=\"info__right\">
                <div class=\"info__right-inner\">
                    <div class=\"title\">
                        Материалы по теме
                    </div>
                    <hr>
                    <div class=\"news__wrap\">
                        <div class=\"news\">
                            <div class=\"left__text1\">
                                Президент Гурбангулы 
                                Бердымухамедов принял участие в 
                                открытии юбилейных объектов
                            </div>
                            <div class=\"left__end\">
                                <div class=\"left__time\">
                                    27.10.2020
                                </div>
                                <div class=\"left__link\">
                                    <a href=\"#\">Узнать больше</a>
                                </div>
                            </div>
                        </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    </div>
                </div> <!-- info__right-inner -->
            </div><!-- info__right -->
            <!-- ------------------------------------------------------ -->
        </div> <!-- info__inner -->
    </div><!-- info -->
</div><!-- container -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 92,  115 => 34,  105 => 27,  96 => 21,  89 => 17,  83 => 14,  76 => 10,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'newsPost' %}

<div class=\"container\">
    <div class=\"info\">
        <div class=\"info__inner\">
            <!---------------------------------------------------------- -->
            <div class=\"info__content\">
                <div class=\"info__content-inner\">
                    <div class=\"title\">
                        {{ post.category.name }}
                    </div>
                    <hr>
                    <div class=\"main__title\">
                        {{ post.title }}
                    </div>
                    <div class=\"views\">
                        {{ post.published_at| date(\"d.m.Y\") }} | 1047 - просмотров
                    </div><!-- views -->
                    
                    <div class=\"slider\" id=\"slider\">
                        <!-- {{ post.images }} -->
                        aaa
                        <div class=\"slider__big\">
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"{{ post.images[0].path }}\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"{{ url('/') }}{{ post.image[1]|media }}\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___40.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___42.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__innir\">
                                        <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider__mini -->
                        <div class=\"slider__mini\">
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___31.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___40.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___42.png\" alt=\"picture\">
                                </div>
                            </div>
                            <div>
                                <div class=\"image__innir\">
                                    <img src=\"images/NoPath___39.png\" alt=\"picture\">
                                </div>
                            </div>
                        </div>
                    </div><!-- slider -->

                    <section class=\"main__news-text\">
                        <p class=\"mini__text\">
                            <!-- {{ post.content}}                           -->
                        </p>
                       
                     </section>
                     
                </div><!-- info__content-inner -->
            </div><!-- info__content -->
            
          <!-- -------------------------------------------------------- -->
            <div class=\"info__right\">
                <div class=\"info__right-inner\">
                    <div class=\"title\">
                        Материалы по теме
                    </div>
                    <hr>
                    <div class=\"news__wrap\">
                        <div class=\"news\">
                            <div class=\"left__text1\">
                                Президент Гурбангулы 
                                Бердымухамедов принял участие в 
                                открытии юбилейных объектов
                            </div>
                            <div class=\"left__end\">
                                <div class=\"left__time\">
                                    27.10.2020
                                </div>
                                <div class=\"left__link\">
                                    <a href=\"#\">Узнать больше</a>
                                </div>
                            </div>
                        </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    <hr class=\"mobile\">
                    <div class=\"news\">
                        <div class=\"left__text1\">
                            Президент Гурбангулы 
                            Бердымухамедов принял участие в 
                            открытии юбилейных объектов
                        </div>
                        <div class=\"left__end\">
                            <div class=\"left__time\">
                                27.10.2020
                            </div>
                            <div class=\"left__link\">
                                <a href=\"#\">Узнать больше</a>
                            </div>
                        </div>
                    </div> <!-- news -->
                    </div>
                </div> <!-- info__right-inner -->
            </div><!-- info__right -->
            <!-- ------------------------------------------------------ -->
        </div> <!-- info__inner -->
    </div><!-- info -->
</div><!-- container -->", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/post.htm", "");
    }
}
