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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/contact.htm */
class __TwigTemplate_81938ba5710956685a35c6f5b29c9fcdb93a9a5209e00ce4029e9a501dd3da2d extends \Twig\Template
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
        $tags = array("component" => 20);
        $filters = array("page" => 4, "theme" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['page', 'theme'],
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
        echo "<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Обратная связь
            </div>
        </div>
        <div class=\"contact_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Форма обратной связи
                </div>
                ";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "            </div>
            <div class=\"right_side\">
                <div class=\"title\">
                    Контакты для связи
                </div>
                <div class=\"contact_info\">
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/phone_signal.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Телефон:
                            </div>
                            <div class=\"address_num\">
                                + 993 (12) 92 12 12
                            </div>
                        </div>
                    </div>
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/just_phone.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Факс:
                            </div>
                            <div class=\"address_num\">
                                + 993 (12) 92 52 30
                            </div>
                        </div>
                    </div>
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/mail.svg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Эл. почта:
                            </div>
                            <div class=\"address_num\">
                                tpress@online.tm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"yandex_map\">
            <script  src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abcb0f3062d6dc50eb95b9731bf57fcf93ab2711a80ee83fabad9febabbc6ab46&amp;width=100%25&amp;height=576&amp;lang=ru_RU&amp;scroll=true\">
            </script>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  116 => 42,  100 => 29,  90 => 21,  86 => 20,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Обратная связь
            </div>
        </div>
        <div class=\"contact_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Форма обратной связи
                </div>
                {% component 'contactForm' %}
            </div>
            <div class=\"right_side\">
                <div class=\"title\">
                    Контакты для связи
                </div>
                <div class=\"contact_info\">
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"{{ 'assets/images/phone_signal.svg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Телефон:
                            </div>
                            <div class=\"address_num\">
                                + 993 (12) 92 12 12
                            </div>
                        </div>
                    </div>
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"{{ 'assets/images/just_phone.svg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Факс:
                            </div>
                            <div class=\"address_num\">
                                + 993 (12) 92 52 30
                            </div>
                        </div>
                    </div>
                    <div class=\"contact_address\">
                        <div class=\"contact_icon\">
                            <img src=\"{{ 'assets/images/mail.svg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"addres_info\">
                            <div class=\"address_name\">
                                Эл. почта:
                            </div>
                            <div class=\"address_num\">
                                tpress@online.tm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"yandex_map\">
            <script  src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abcb0f3062d6dc50eb95b9731bf57fcf93ab2711a80ee83fabad9febabbc6ab46&amp;width=100%25&amp;height=576&amp;lang=ru_RU&amp;scroll=true\">
            </script>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/contact.htm", "");
    }
}
