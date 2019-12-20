<?php 

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'tipe'  => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }

    public static function setLog($data)
    {
        $_SESSION['logged_in'] = $data;
    }

    public static function setMemberLog($data)
    {
        $_SESSION['member'] = $data;
    }

    public static function getLog()
    {
        return isset($_SESSION['logged_in'])?$_SESSION['logged_in']:NULL;
    }

    public static function getMemberLog()
    {
        return isset($_SESSION['member'])?$_SESSION['member']:NULL;
    }

    public static function unsetLog()
    {
        unset($_SESSION['logged_in']);
    }

    public static function unsetMemberLog()
    {
        unset($_SESSION['member']);
    }

    public static function setLink($data)
    {
        $_SESSION['active'] = $data;
    }

    public static function getLink()
    {
        return isset($_SESSION['active'])?$_SESSION['active']:NULL;
    }
}