<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>EDIT</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<center>
		<h1>Membuat menu dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($menu as $u){ ?>

    <form action="<?php echo base_url(). 'menu/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>email</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="email" value="<?php echo $u->email ?>">
				</td>
			</tr>
            <tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
			<tr>
				<td>tgl_pesan</td>
				<td><input type="date" name="tgl_pesan" value="<?php echo $u->tgl_pesan ?>"></td>
			</tr>
			<tr>
				<td>menu</td>
				<td><input type="text" name="menu" value="<?php echo $u->menu ?>"></td>
                    <?php foreach ($query->result_array() as $row)
                    {
                    $options[$row['idmenu']]=$row['namamenu'];
                    }
                    ?>
			</tr>
            <tr>
				<td>metode</td>
				<td><input type="text" name="metode" value="<?php echo $u->metode ?>"></td>
                <?php
                    // if (set_value('metode')== 'makanlangsung'){$ket=TRUE;}else{$ket=FALSE;}
                    // echo form_radio('metode', 'makanlangsung', $ket); echo "Makan Langsung </br>";
                    // if (set_value('metode')== 'bungkus'){$ket=TRUE;}else{$ket=FALSE;}
                    // echo form_radio('metode', 'bungkus',$ket); echo "Bungkus </br>";
                    // ?>
            </tr>
            <tr>
				<td>keterangan</td>
				<td><input type="textarea" name="keterangan" value="<?php echo $u->keterangan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>