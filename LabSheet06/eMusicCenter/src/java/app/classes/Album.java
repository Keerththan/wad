/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app.classes;

/**
 *
 * @author HP
 */
public class Album {

    private int album_id;
    private String album_name;
    private Artist artist;

    public Album(int album_id, String album_name, Artist artist) {
        this.album_id = album_id;
        this.album_name = album_name;
        this.artist = artist;
    }
    
    public Artist getArtist() {
        return artist;
    }

    public void setArtist(Artist artist) {
        this.artist = artist;
    }

    public String getAlbum_name() {
        return album_name;
    }

    public void setAlbum_name(String album_name) {
        this.album_name = album_name;
    }

    public int getAlbum_id() {
        return album_id;
    }

    public void setAlbum_id(int album_id) {
        this.album_id = album_id;
    }

}
