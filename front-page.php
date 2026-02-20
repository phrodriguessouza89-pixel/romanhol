<?php get_header(); ?>

<style>
    /* Pinta o fundo do cabeçalho de escuro para o logo branco aparecer */
    header {
        background-color: #1c1c1c !important; /* Cinza quase preto */
        padding: 20px 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Ajusta o tamanho do logo */
    .header-logo img {
        max-height: 50px; /* Tamanho controlado */
        width: auto;
    }

    /* Organiza o menu para ficar lado a lado e branco */
    .menu ul {
        list-style: none;
        padding: 0;
        margin: 20px 0 0 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .menu ul li {
        margin: 0 15px;
    }

    .menu ul li a {
        color: #fff !important; /* Texto branco */
        text-decoration: none;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 500;
        font-family: Arial, sans-serif;
    }

    .menu ul li a:hover {
        color: #d35400 !important; /* Laranja no hover */
    }

    /* Estilos do Conteúdo Principal (Mantidos) */
    .portal-container { padding: 60px 0; }
    .portal-title { color: #333; border-left: 5px solid #d35400; padding-left: 15px; margin-bottom: 30px; text-transform: uppercase; }
    
    .card-empresa {
        background: #fff;
        border: 1px solid #e0e0e0;
        padding: 30px;
        min-height: 140px;
        position: relative;
        transition: all 0.3s ease;
        display: block;
        text-decoration: none !important;
        margin-bottom: 30px;
    }
    .card-empresa:hover {
        border-color: #d35400;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transform: translateY(-2px);
    }
    .card-empresa h5 { color: #333; font-size: 18px; font-weight: 600; margin-bottom: 5px; }
    .card-empresa span { color: #777; font-size: 13px; }
    .card-arrow { position: absolute; bottom: 20px; right: 20px; color: #d35400; }
</style>

<div class="portal-container container">
    <div class="row mb-5">
        <div class="col-12">
            <h2 style="font-weight: 700; text-transform: uppercase; margin-bottom: 20px; color: #000;">
                <span style="color: #d35400; font-size: 0.6em; vertical-align: middle; margin-right: 10px;">&#9632;</span>
                A ADMINISTRAÇÃO JUDICIAL
            </h2>
            <p style="text-align: justify; color: #333; font-size: 16px; line-height: 1.6;">
                A Administração Judicial desempenha papel essencial na condução eficiente, transparente e equilibrada dos processos de falência. Atuamos com rigor técnico, compromisso institucional e respeito absoluto às diretrizes legais, assegurando que cada etapa do procedimento falimentar seja executada com clareza, responsabilidade e observância dos princípios de legalidade, publicidade e proteção dos interesses envolvidos.
            </p>
            <hr style="border-top: 1px solid #eee; margin-top: 30px;">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="portal-title">PAINEL DE DOCUMENTOS PROCESSUÁIS</h2>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <!-- Formulário de Busca Nativo (Substituindo Ivory Search) -->
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" style="position: relative;">
                <div class="input-group" style="box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-radius: 4px; overflow: hidden;">
                    <input type="search" class="form-control" placeholder="Digite o nome do documento..." value="<?php echo get_search_query(); ?>" name="s" style="height: 50px; border: none; padding-left: 20px; font-size: 16px;" />
                    
                    <!-- FORÇA A BUSCA POR DOCUMENTOS -->
                    <input type="hidden" name="post_type" value="documento" />
                    
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="background-color: #d35400; border-color: #d35400; padding: 0 30px; font-weight: 600; text-transform: uppercase;">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <h4 style="color:#666; border-bottom: 1px solid #eee; padding-bottom: 10px;">EMPRESAS (CATEGORIAS)</h4>
        </div>
    </div>

    <div class="row">
        <?php 
        $empresas = get_terms(array(
            'taxonomy' => 'empresa',
            'hide_empty' => false, 
        ));

        if (!empty($empresas) && !is_wp_error($empresas)) :
            foreach($empresas as $empresa) : 
                $link = get_term_link($empresa);
        ?>
            <div class="col-md-4">
                <a href="<?php echo $link; ?>" class="card-empresa">
                    <h5><?php echo $empresa->name; ?></h5>
                    <span><?php echo $empresa->count; ?> documentos disponíveis</span>
                    <i class="fas fa-arrow-right card-arrow"></i>
                </a>
            </div>
        <?php 
            endforeach;
        else : 
        ?>
            <div class="col-12">
                <div style="background: #fff3cd; color: #856404; padding: 20px; border: 1px solid #ffeeba; border-radius: 4px;">
                    Nenhuma empresa cadastrada. Vá em <b>Documentos > Empresas</b> no painel e crie uma categoria.
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>