<?php $this->load->view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a title="Voltar" href="<?php echo base_url('clientes'); ?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
            </div>
            <div class="card-body">

                <form method="POST" name="form_edit">

                    <fieldset class="mt-4 border p-2">

                        <legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados pessoais</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-4">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="cliente_nome" placeholder="Nome do cliente" value="<?php echo $cliente->cliente_nome; ?>">
                                <?php echo form_error('cliente_nome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-4">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control" name="cliente_sobrenome" placeholder="Sobrenome do cliente" value="<?php echo $cliente->cliente_sobrenome; ?>">
                                <?php echo form_error('cliente_sobrenome', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>CPF ou CNPJ</label>
                                <input type="text" class="form-control cnpj" name="cliente_cpf_cnpj" placeholder="CPF ou CNPJ" value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                                <?php echo form_error('cliente_cpf_cnpj', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>RG ou I.E</label>
                                <input type="text" class="form-control" name="cliente_rg_ie" placeholder="RG ou I.E" value="<?php echo $cliente->cliente_rg_ie; ?>">
                                <?php echo form_error('cliente_rg_ie', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>

                        </div>
                    </fieldset>

                    <div class="form-group row mb-3">
                        <div class="col-md-4">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="cliente_email" placeholder="E-mail do cliente" value="<?php echo $cliente->cliente_email; ?>">
                            <?php echo form_error('cliente_email', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-2">
                            <label>Telefone fixo</label>
                            <input type="text" class="form-control sp_celphones" name="cliente_telefone" placeholder="Telefone do cliente" value="<?php echo $cliente->cliente_telefone; ?>">
                            <?php echo form_error('cliente_telefone', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-2">
                            <label>Telefone Celular</label>
                            <input type="text" class="form-control sp_celphones" name="cliente_celular" placeholder="Celular do cliente" value="<?php echo $cliente->cliente_celular; ?>">
                            <?php echo form_error('cliente_celular', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label>Data nascimento</label>
                            <input type="date" class="form-control" name="cliente_data_nascimento" value="<?php echo $cliente->cliente_data_nascimento; ?>">
                            <?php echo form_error('cliente_data_nascimento', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                    </div>

                    <div class="form-group row mb-3">

                        <div class="col-md-2">
                            <label>CEP</label>
                            <input type="text" class="form-control cep" name="cliente_cep" placeholder="CEP do cliente" value="<?php echo $cliente->cliente_cep; ?>">
                            <?php echo form_error('cliente_cep', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label>Endereço</label>
                            <input type="text" class="form-control" name="cliente_endereco" placeholder="Número do endereço do cliente" value="<?php echo $cliente->cliente_endereco; ?>">
                            <?php echo form_error('cliente_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-2">
                            <label>Número</label>
                            <input type="text" class="form-control" name="cliente_numero_endereco" placeholder="Endereço do cliente" value="<?php echo $cliente->cliente_numero_endereco; ?>">
                            <?php echo form_error('cliente_numero_endereco', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-4">
                            <label>Bairro</label>
                            <input type="text" class="form-control" name="cliente_bairro" placeholder="Bairro do cliente" value="<?php echo $cliente->cliente_bairro; ?>">
                            <?php echo form_error('cliente_bairro', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                    </div>

                    <div class="form-group row mb-3">

                        <div class="col-md-3">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="cliente_cidade" placeholder="Cidade do cliente" value="<?php echo $cliente->cliente_cidade; ?>">
                            <?php echo form_error('cliente_cidade', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-1">
                            <label>UF</label>
                            <input type="text" class="form-control uf" name="cliente_estado" placeholder="UF do cliente" value="<?php echo $cliente->cliente_estado; ?>">
                            <?php echo form_error('cliente_estado', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>

                        <div class="col-md-8">
                            <label>Observações</label>
                            <textarea class="form-control" name="cliente_obs" ><?php echo $cliente->cliente_obs; ?></textarea>
                            <?php echo form_error('cliente_obs', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id; ?>"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>

