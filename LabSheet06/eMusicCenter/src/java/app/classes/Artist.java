/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package app.classes;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author HP
 */
public class Artist {

    private int artist_id;
    private String artist_name;

    public Artist() {
    }

    public Artist(int artist_id, String artist_name) {
        this.artist_id = artist_id;
        this.artist_name = artist_name;
    }

    public int getArtist_id() {
        return artist_id;
    }

    public void setArtist_id(int artist_id) {
        this.artist_id = artist_id;
    }

    public String getArtist_name() {
        return artist_name;
    }

    public void setArtist_name(String artist_name) {
        this.artist_name = artist_name;
    }

    public List<Artist> listAllArtists(Connection con) {
        List<Artist> artistList = new ArrayList<>();

        try {
            String query = "SELECT * FROM artist";
            PreparedStatement pstmt = con.prepareStatement(query);
            ResultSet rs = pstmt.executeQuery();
            while (rs.next()) {
                Artist artist = new Artist(rs.getInt("artist_id"), rs.getString("artist_name"));
                artistList.add(artist);
            }
        } catch (SQLException ex) {
            Logger.getLogger(Artist.class.getName()).log(Level.SEVERE, null, ex);
        }

        return artistList;
    }
    
     public List<Album> getAlbums(Connection con) {
        List<Album>albumList = new ArrayList<>();

        try {
            String query = "SELECT * FROM album WHERE artist_id = ?";
            PreparedStatement pstmt = con.prepareStatement(query);
            pstmt.setInt(1, this.getArtist_id());
            ResultSet rs = pstmt.executeQuery();
            while (rs.next()) {
                Album album = new Album(rs.getInt("album_id"), rs.getString("album_name"),  this);
                albumList.add(album);
            }
        } catch (SQLException ex) {
            Logger.getLogger(Artist.class.getName()).log(Level.SEVERE, null, ex);
        }

        return albumList;
    }
}
