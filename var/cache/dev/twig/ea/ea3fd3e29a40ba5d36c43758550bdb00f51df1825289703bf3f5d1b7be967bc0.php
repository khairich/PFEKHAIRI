<?php

/* rating/index.html.twig */
class __TwigTemplate_4d109688b8724f67698adf0ce2f3d3c9ccdf7700b75621e1b6cbb00e822b2d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:layout.html.twig", "rating/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rating/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/buttons-follow.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/users.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1>People</h1>
            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), "getTotalItemCount", array()), "html", null, true);
        echo "
                </span>
            </div>

            <hr>
            <div class=\"box-content box-users\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                    <div class=\"col-lg-12 user-item\">
                        <div class=\"avatar\">
                            ";
            // line 23
            if (($this->getAttribute($context["user"], "image", array()) == null)) {
                // line 24
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 26
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/media/" . $this->getAttribute($context["user"], "id", array())) . "_usermedia/") . $this->getAttribute($context["user"], "image", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 28
            echo "                        </div>

                        <div class=\"user-item-content\">
                            <p>
                                <a class=\"user_link\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile", array("nick" => $this->getAttribute($context["user"], "nick", array()))), "html", null, true);
            echo "\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()), "html", null, true);
            echo "
                                </a> - ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nick", array()), "html", null, true);
            echo "
                            </p>
                            <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "bio", array()), "html", null, true);
            echo "</p>
                            
                            <div class=\"pull-right buttons-following\">
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rating_new", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-link\">Rate</a>
                             ";
            // line 44
            echo "                             </div>
                        </div>
                             
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>

            <div class=\"navigation\">
                ";
        // line 54
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        echo "
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rating/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  150 => 51,  138 => 44,  134 => 39,  128 => 36,  123 => 34,  117 => 33,  113 => 32,  107 => 28,  99 => 26,  91 => 24,  89 => 23,  85 => 21,  81 => 20,  72 => 14,  65 => 9,  59 => 8,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Layouts:layout.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/custom/buttons-follow.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom/users.js') }}\"></script>
{% endblock %}
{% block content %}
    <div class=\"container\">
        <div class=\"col-lg-12 box-default\">
            <h1>People</h1>
            <div class=\"count\">
                <span class=\"label label-primary\">
                    Total {{ users.getTotalItemCount }}
                </span>
            </div>

            <hr>
            <div class=\"box-content box-users\">
                {% for user in users %}
                    <div class=\"col-lg-12 user-item\">
                        <div class=\"avatar\">
                            {% if user.image == null %}
                                <img src=\"{{ asset('assets/images/default.png') }}\" alt=\"{{ user.nick }}\">
                            {% else %}
                                <img src=\"{{ asset('uploads/media/'~user.id~'_usermedia/'~user.image) }}\" alt=\"{{ user.nick }}\">
                            {% endif %}
                        </div>

                        <div class=\"user-item-content\">
                            <p>
                                <a class=\"user_link\" href=\"{{ path('user_profile', {'nick': user.nick}) }}\">
                                    {{ user.name }} {{ user.surname }}
                                </a> - {{ user.nick }}
                            </p>
                            <p>{{ user.bio }}</p>
                            
                            <div class=\"pull-right buttons-following\">
                            <a href=\"{{ path('rating_new',{ 'id': user.id }) }}\" type=\"button\" class=\"btn btn-link\">Rate</a>
                             {# {% for rating in ratings %}
                             {% if user.id == rating.idUser %}
                             {% endif %}
                             {% endfor %} #}
                             </div>
                        </div>
                             
                        <div class=\"clearfix\"></div>
                        <hr>
                    </div>
                {% endfor %}
            </div>

            <div class=\"navigation\">
                {{ knp_pagination_render(users) }}
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}

{# {% block body %}
    <h1>Ratings list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Iduser</th>
                <th>Vote</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rating in ratings %}
            <tr>
                <td><a href=\"{{ path('rating_show', { 'id': rating.id }) }}\">{{ rating.id }}</a></td>
                <td>{{ rating.idUser }}</td>
                <td>{{ rating.vote }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rating_show', { 'id': rating.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rating_edit', { 'id': rating.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rating_new') }}\">Create a new rating</a>
        </li>
    </ul>
{% endblock %} #}", "rating/index.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\rating\\index.html.twig");
    }
}
