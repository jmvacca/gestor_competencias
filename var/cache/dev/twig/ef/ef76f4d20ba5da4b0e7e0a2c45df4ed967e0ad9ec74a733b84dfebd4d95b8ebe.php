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

/* competencia_deportiva/_form.html.twig */
class __TwigTemplate_a82b77a35ee230d2884021c6c063acf61d8c5cdae5641b7f2a99ba0eef2faeb9 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col\">
        <label for=\"Nombre\">Nombre: *</label>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nombre", [], "any", false, false, false, 5), 'widget', ["attr" => ["type" => "text", "style" => "text-transform:uppercase", "placeholder" => "Introduce el Nombre", "maxlength" => "20", "class" => "form-control", "id" => "NombreCompetencia"]]);
        // line 12
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), 'errors');
        echo "
    </div>
    <div class=\"col\">
        <label for=\"Deporte\">Deporte: *</label>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "deporte", [], "any", false, false, false, 17), 'widget', ["attr" => ["style" => "text-transform:uppercase", "name" => "Deporte", "class" => "form-control"]]);
        // line 21
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-6\">
        <label for=\"Nombre\">Lugar/res De Realizacion: *</label>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-7\" id=\"disponibilidades_lista\" data-prototype=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "disponibilidades", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), 'widget'), "html_attr");
        echo "\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "disponibilidades", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["row"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
    <div class=\"col-2\">
        <button class=\"btn btn-primary btn-lg\" id=\"bt_add\" name=\"bt_add\" type=\"submit\"> Agregar A La Lista </button>
    </div>
</div>
<div class=\"container\">
    <div class=\"container\">
        <div class=\"row\">
            <table class=\"table table-striped table-bordered table-hover\" id=\"tabla\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>Nro</th>
                    <th>Lugar</th>
                    <th>Disponibilidad</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody id=\"tablalugares\"> </tbody>
            </table>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-10\">
        <label for=\"modalidad\">Modalidad: *</label>
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "modalidad", [], "any", false, false, false, 60), 'widget', ["attr" => ["type" => "select", "style" => "text-transform:uppercase", "name" => "modalidad", "class" => "form-control", "id" => "modalidad"]]);
        // line 66
        echo "
    </div>
    <div class=\"col-2\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\" name=\"bt_modalidad\" id=\"bt_modalidad\"> Configurar Modalidad </button>
        <div class=\"modal fade\" id=\"modalModalidadcfg\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\" id=\"modal\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"></h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Se permite empate? </p>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "permiteEmpate", [], "any", false, false, false, 86), 'widget', ["attr" => ["type" => "checkbox", "name" => "empate", "id" => "sie"]]);
        // line 90
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por empate? </p>
                                </div>
                                <div class=\"col-3\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "puntosEmpate", [], "any", false, false, false, 98), 'widget', ["attr" => ["type" => "number", "id" => "PPE", "name" => "PPE", "min" => "0", "max" => "999", "class" => "form-control", "placeholder" => "0 - 999"]]);
        // line 106
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por presentarse? </p>
                                </div>
                                <div class=\"col-3\">
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "puntosPorPresentarse", [], "any", false, false, false, 114), 'widget', ["attr" => ["type" => "number", "id" => "PPPRE", "name" => "PPPRE", "min" => "0", "max" => "999", "class" => "form-control", "placeholder" => "0 - 999"]]);
        // line 122
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por partido ganado?</p>
                                </div>
                                <div class=\"col-3\">
                                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "puntosPartidoGanado", [], "any", false, false, false, 130), 'widget', ["attr" => ["type" => "number", "id" => "PPG", "name" => "PPG", "min" => "1", "max" => "999", "class" => "form-control", "placeholder" => "1 - 999"]]);
        // line 138
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>Forma de puntuacion: </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion1();\" id=\"sets\" checked> Sets
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion2();\" id=\"puntuacion\"> Puntuacion WalkOver
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion3();\" id=\"resultadofinal\"> Resultado Final
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "cantidadMaximaSet", [], "any", false, false, false, 165), 'widget', ["attr" => ["type" => "select", "id" => "csets", "name" => "sets", "class" => "form-control"]]);
        // line 170
        echo "
                                </div>
                                <div class=\"col-4\">
                                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "puntosPorNoPresentarse", [], "any", false, false, false, 173), 'widget', ["attr" => ["type" => "number", "id" => "puntuacionwo", "name" => "puntuacionwo", "min" => "1", "max" => "999", "class" => "form-control", "placeholder" => "WO: 1 - 999", "disabled" => "true"]]);
        // line 182
        echo "
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Guardar</button>
                            </div>
                            <div class=\"col-6\">
                                <button type=\"button\" id=\"buttonCM1\" class=\"btn btn-danger btn-block\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Reglamento-->
<div class=\"container\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"CheckReglamento\">Reglamento</input>
    <div class=\"modal fade\" id=\"reglamento\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h6> Reglamento: </h6>
                    ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "reglamento", [], "any", false, false, false, 210), 'widget');
        echo "
                    <hr>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"reglamentofile\" lang=\"es\">
                        <label class=\"custom-file-label\" for=\"customFileLang\">Seleccionar Archivo</label>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-2\"></div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Aceptar</button>
                        </div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"reglamentoDesactivado\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Reglamento desactivado, no se guardara ningún reglamento.
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-4\">
                        </div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Okey</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Botones Aceptar y Cancelar -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <button class=\"btn btn-success btn-lg btn-block\" id=\"AceptarNC\" name=\"Aceptar\">";
        // line 254
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 254, $this->source); })()), "ACEPTAR")) : ("ACEPTAR")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"col-6\">
            <button class=\"btn btn-danger btn-lg btn-block\" id=\"CancelarNC\" name=\"Cancelar\">CANCELAR</button>
        </div>
        <div class=\"modal fade\" id=\"modalCancelarNC\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-warning\" role=\"alert\">
                            <h4> ¿Seguro que desea cancelar la operacion y salir? </h4>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-2\">
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" id=\"AceptarCancelarNC\" class=\"btn btn-outline-secondary btn-block\">Si</button>
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-block\" data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"modalAceptarNC\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-info\" role=\"alert\">
                            <div id=\"bodyAceptarNC\"> </div>
                            <h4> ¿Seguro que desea aceptar y crear la nueva competencia? </h4>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-2\">
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" id=\"AceptarMNC\" class=\"btn btn-outline-success btn-block\">Si</button>
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" class=\"btn btn-outline-danger btn-block\" data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"CompetenciaCreada\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\"  role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-success\" role=\"alert\">
                            Competencia creada con exito.
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-4\">
                            </div>
                            <div class=\"col-4\">
                                <button text=\"center\" type=\"button\" onclick=\"location.href='index_listarcompetencias.php'\" class=\"btn btn-primary btn-block\">Okey</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 325
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), 'form_end');
        echo "



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competencia_deportiva/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 325,  297 => 254,  250 => 210,  220 => 182,  218 => 173,  213 => 170,  211 => 165,  182 => 138,  180 => 130,  170 => 122,  168 => 114,  158 => 106,  156 => 98,  146 => 90,  144 => 86,  122 => 66,  120 => 60,  92 => 34,  83 => 32,  79 => 31,  75 => 30,  64 => 21,  62 => 17,  55 => 13,  52 => 12,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
    <div class=\"col\">
        <label for=\"Nombre\">Nombre: *</label>
        {{ form_widget(form.nombre, {'attr': {
            'type':'text',
            'style':'text-transform:uppercase',
            'placeholder':'Introduce el Nombre',
            'maxlength':'20',
            'class':'form-control',
            'id':'NombreCompetencia'
        }}) }}
        {{ form_errors(form.nombre) }}
    </div>
    <div class=\"col\">
        <label for=\"Deporte\">Deporte: *</label>
        {{ form_widget(form.deporte, {'attr': {
            'style' : 'text-transform:uppercase',
            'name' : 'Deporte',
            'class' : 'form-control'
        }}) }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-6\">
        <label for=\"Nombre\">Lugar/res De Realizacion: *</label>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-7\" id=\"disponibilidades_lista\" data-prototype=\"{{ form_widget(form.disponibilidades.vars.prototype)|e('html_attr') }}\">
        {% for row in form.disponibilidades %}
            {{ form_row(row) }}
        {% endfor %}
    </div>
    <div class=\"col-2\">
        <button class=\"btn btn-primary btn-lg\" id=\"bt_add\" name=\"bt_add\" type=\"submit\"> Agregar A La Lista </button>
    </div>
</div>
<div class=\"container\">
    <div class=\"container\">
        <div class=\"row\">
            <table class=\"table table-striped table-bordered table-hover\" id=\"tabla\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>Nro</th>
                    <th>Lugar</th>
                    <th>Disponibilidad</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody id=\"tablalugares\"> </tbody>
            </table>
        </div>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-10\">
        <label for=\"modalidad\">Modalidad: *</label>
        {{ form_widget(form.modalidad,{'attr':{
            'type' : 'select',
            'style' : 'text-transform:uppercase',
            'name' : 'modalidad',
            'class' : 'form-control',
            'id' : 'modalidad'
        }}) }}
    </div>
    <div class=\"col-2\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\" name=\"bt_modalidad\" id=\"bt_modalidad\"> Configurar Modalidad </button>
        <div class=\"modal fade\" id=\"modalModalidadcfg\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\">
                <div class=\"modal-content\" id=\"modal\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"></h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Se permite empate? </p>
                                </div>
                                <div class=\"col-6\">
                                    {{ form_widget(form.permiteEmpate,{'attr' : {
                                        'type' : 'checkbox',
                                        'name' : 'empate',
                                        'id' : 'sie'
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por empate? </p>
                                </div>
                                <div class=\"col-3\">
                                    {{ form_widget(form.puntosEmpate,{'attr' : {
                                        'type' : 'number',
                                        'id' : 'PPE',
                                        'name' : 'PPE',
                                        'min' : '0',
                                        'max' : '999',
                                        'class' : 'form-control',
                                        'placeholder' : '0 - 999'
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por presentarse? </p>
                                </div>
                                <div class=\"col-3\">
                                    {{ form_widget(form.puntosPorPresentarse,{'attr' : {
                                        'type' : 'number',
                                        'id' : 'PPPRE',
                                        'name' : 'PPPRE',
                                        'min' : '0',
                                        'max' : '999',
                                        'class' : 'form-control',
                                        'placeholder' : '0 - 999'
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>¿Puntos por partido ganado?</p>
                                </div>
                                <div class=\"col-3\">
                                    {{ form_widget(form.puntosPartidoGanado,{'attr' : {
                                        'type' : 'number',
                                        'id' : 'PPG',
                                        'name' : 'PPG',
                                        'min' : '1',
                                        'max' : '999',
                                        'class' : 'form-control',
                                        'placeholder' : '1 - 999'
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <p>Forma de puntuacion: </p>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion1();\" id=\"sets\" checked> Sets
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion2();\" id=\"puntuacion\"> Puntuacion WalkOver
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"radio\">
                                        <input type=\"radio\" name=\"fpuntuacion\" onclick=\"funcion3();\" id=\"resultadofinal\"> Resultado Final
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    {{ form_widget(form.cantidadMaximaSet, {'attr' : {
                                        'type' : 'select',
                                        'id' : 'csets',
                                        'name' : 'sets',
                                        'class' : 'form-control'
                                    }}) }}
                                </div>
                                <div class=\"col-4\">
                                    {{ form_widget(form.puntosPorNoPresentarse, {'attr' : {
                                        'type' : 'number',
                                        'id' : 'puntuacionwo',
                                        'name' : 'puntuacionwo',
                                        'min' : '1',
                                        'max' : '999',
                                        'class' : 'form-control',
                                        'placeholder' : 'WO: 1 - 999',
                                        'disabled' : 'true'
                                    }}) }}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <button type=\"submit\" class=\"btn btn-success btn-block\">Guardar</button>
                            </div>
                            <div class=\"col-6\">
                                <button type=\"button\" id=\"buttonCM1\" class=\"btn btn-danger btn-block\" data-dismiss=\"modal\">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Reglamento-->
<div class=\"container\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"CheckReglamento\">Reglamento</input>
    <div class=\"modal fade\" id=\"reglamento\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <h6> Reglamento: </h6>
                    {{ form_widget(form.reglamento) }}
                    <hr>
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"reglamentofile\" lang=\"es\">
                        <label class=\"custom-file-label\" for=\"customFileLang\">Seleccionar Archivo</label>
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-2\"></div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Aceptar</button>
                        </div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"reglamentoDesactivado\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning\" role=\"alert\">
                        Reglamento desactivado, no se guardara ningún reglamento.
                    </div>
                    <hr>
                    <div class=\"row\">
                        <div class=\"col-4\">
                        </div>
                        <div class=\"col-4\">
                            <button text=\"center\" type=\"button\" class=\"btn btn-primary btn-block\" data-dismiss=\"modal\">Okey</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Botones Aceptar y Cancelar -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <button class=\"btn btn-success btn-lg btn-block\" id=\"AceptarNC\" name=\"Aceptar\">{{ button_label|default('ACEPTAR') }}</button>
        </div>
        <div class=\"col-6\">
            <button class=\"btn btn-danger btn-lg btn-block\" id=\"CancelarNC\" name=\"Cancelar\">CANCELAR</button>
        </div>
        <div class=\"modal fade\" id=\"modalCancelarNC\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-warning\" role=\"alert\">
                            <h4> ¿Seguro que desea cancelar la operacion y salir? </h4>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-2\">
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" id=\"AceptarCancelarNC\" class=\"btn btn-outline-secondary btn-block\">Si</button>
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" class=\"btn btn-outline-secondary btn-block\" data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"modalAceptarNC\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-info\" role=\"alert\">
                            <div id=\"bodyAceptarNC\"> </div>
                            <h4> ¿Seguro que desea aceptar y crear la nueva competencia? </h4>
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-2\">
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" id=\"AceptarMNC\" class=\"btn btn-outline-success btn-block\">Si</button>
                            </div>
                            <div class=\"col-4\">
                                <button type=\"button\" class=\"btn btn-outline-danger btn-block\" data-dismiss=\"modal\">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"CompetenciaCreada\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\"  role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <div class=\"alert alert-success\" role=\"alert\">
                            Competencia creada con exito.
                        </div>
                        <hr>
                        <div class=\"row\">
                            <div class=\"col-4\">
                            </div>
                            <div class=\"col-4\">
                                <button text=\"center\" type=\"button\" onclick=\"location.href='index_listarcompetencias.php'\" class=\"btn btn-primary btn-block\">Okey</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ form_end(form) }}



", "competencia_deportiva/_form.html.twig", "C:\\Users\\joaqo\\Desktop\\Proyectos\\gestor_competencias\\templates\\competencia_deportiva\\_form.html.twig");
    }
}
