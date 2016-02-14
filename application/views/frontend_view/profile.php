

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/tree_horizontal/css/jquery.jOrgChart.css"/>
<link href="<?php echo base_url(); ?>assets/js/tree_horizontal/css/prettify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tree_horizontal/prettify.js"></script>
<!-- jQuery includes -->
<!-- jQuery includes -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tree_horizontal/jquery.jOrgChart.js"></script>
<script>
    jQuery(document).ready(function() {
        $("#org").jOrgChart({
            chartElement : '#chart',
            dragAndDrop  : true
        });

        $("#org2").jOrgChart({
            chartElement : '#chart2',
            dragAndDrop  : true
        });

    });
</script>
<section id="referral-section">
    <div class="container">

        <div class="homeInfo round5">
            <div class="summary">
                <div class="info">
                    <p>Berikut adalah data Anda yang kami terima, jika ada perubahan mohon segera hubungi Manajemen</p>
                    <table border="0" width="100%">
                        <tr>
                            <td width="10%"><b>ID Anggota</b></td><td width="25%">: <?php echo $id_anggota; ?></td>
                        </tr>
                        <tr>
                            <td width="10%"><b>Nama Anggota</b></td><td width="25%">: <font color="#FF0000"><?php echo $nama; ?></font></td>
                        </tr>
                        <tr>
                            <td width="10%"><b>Nama Upline</b></td><td width="25%">:
                            <?php 
                            $res_by_upline=$this->user_model->get_data_by_id($id_upline);
                            echo isset($res_by_upline->row()->nama)?$res_by_upline->row()->nama:'';
                            ?></td>
                        </tr>

                    </tr>
                    <tr>
                        <td width="10%"><b>Tanggal Gabung</b></td><td width="25%">: <?php echo FormatDateFromMysql($tanggal) ?></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Tipe Member</b></td><td width="25%">: Plan <?php echo $plan; ?></font></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Biaya Registrasi</b></td><td width="25%">: <?php echo $nilai; ?></font></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Kota</b></td><td width="25%">: <?php echo $kota; ?> </td>
                    </tr>
                    <tr>
                        <td width="10%"><b>No. Hp</b></td><td width="25%">: <?php echo $no_hp; ?></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Bank</b></td><td width="25%">: <?php echo $bank; ?></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Bank Atas Nama</b></td><td width="25%">: <?php echo $bank_an; ?></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>No. Rek</b></td><td width="25%">: <?php echo $no_rek; ?></td>
                    </tr>
                    <tr>
                        <td width="10%"><b>Nama Ibu</b></td><td width="25%">: <?php echo $nama_ibu; ?></td>
                    </tr>
                </table>
            </div>

            <div class="photo">
                <img border="0" src="<?php echo base_url(); ?>assets/uploads/photos/noimage_m.png" /> </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


</div>
</div>
</section><!--/products-section-->

<div class="contentLeft">
    <div class="contentbox round5">
        <div class="content">
            <div class="egContent">
                <h2 align="center">Network</h2>
                <p align="left">&nbsp;</p>

                <ul id="org" style="display:none">
                    <li><?php echo $nama; ?>
                        <?php
                        echo $res_network;
                        ?>
                    </li>
                </ul>
                <div align="center"><div id="chart" class="orgChart"></div></div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<script>
    jQuery(document).ready(function() {

        /* Custom jQuery for the example */
        $("#show-list").click(function(e){
            e.preventDefault();

            $('#list-html').toggle('fast', function(){
                if($(this).is(':visible')){
                    $('#show-list').text('Hide underlying list.');
                    $(".topbar").fadeTo('fast',0.9);
                }else{
                    $('#show-list').text('Show underlying list.');
                    $(".topbar").fadeTo('fast',1);                  
                }
            });
        });

        $('#list-html').text($('#org').html());

        $("#org").bind("DOMSubtreeModified", function() {
            $('#list-html').text('');
            $('#list-html').text($('#org').html());
            prettyPrint();                
        });
    });
</script>
<!--end content left-->




