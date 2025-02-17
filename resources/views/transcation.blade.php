<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    table, td, th {
        padding: 5px;
    }
</style>
<script>
    window.print();
</script>
<h1>Point of Sale</h1>
<h2>Transaksi</h2>
<hr>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $name }}</td>
    </tr>
</table>
<hr>
<table>
    <tr>
        <td>Kategori</td>
        <td>:</td>
        <td>{{ $category }}</td>
    </tr>
    <tr>
        <td>Kuantitas</td>
        <td>:</td>
        <td>{{ $qty }}</td>
    </tr>
    <tr>
        <td>Subtotal</td>
        <td>:</td>
        <td>{{ $subtotal }}</td>
    </tr>
</table>
<hr>
<table>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td>{{ $total }}</td>
    </tr>
</table>