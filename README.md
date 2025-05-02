# Test masalah header `Authorization` pada web Dishut Kalsel

## Catatan

Ini merupakan repo untuk test permasalahan header `Authorization` yang dihapus oleh apache.

Ada 2 opsi yang bisa dicoba untuk masalah ini:

### Opsi 1: Mengaktifkan CGIPassAuth

Aktifkan CGIPassAuth dengan menambahkan kode berikut pada virtualhost:

```conf
CGIPassAuth On
```

Untuk detailnya ada pada file [`config/apache/httpd.conf` baris ke 271](https://github.com/pinandu-studio/test-dishut-apache-header/blob/48f76c3aeba4d78bab4eeeb211ded6890e0e40ee/config/apache/httpd.conf#L271).

### Opsi 2: Menggunakan SetEnvIf

Gunakan SetEnvIf dengan menambahkan kode berikut pada virtualhost:

```conf
SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
```

Untuk detailnya ada pada file [`config/apache/httpd.conf` baris ke 274](https://github.com/pinandu-studio/test-dishut-apache-header/blob/48f76c3aeba4d78bab4eeeb211ded6890e0e40ee/config/apache/httpd.conf#L274).

## Menjalankan

Untuk mencoba, jalankan command berikut:

```bash
docker compose up
```

Web akan tersedia di http://localhost:15400

Kemudian kirimkan data menggunakan postman atau menggunakan curl seperti ini:

```bash
curl -X GET 'http://localhost:15400/cek_header.php' \
  --header 'Authorization: Ini-adalah-token'
```