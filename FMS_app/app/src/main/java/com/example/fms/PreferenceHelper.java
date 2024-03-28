package com.example.fms;

import android.content.Context;
import android.content.SharedPreferences;

public class PreferenceHelper {
    private SharedPreferences sharedPreferences;
    private Context context;
    private String st_id = "st_id", name = "name", img = "img";
    public void SharedPrefrencesHelper(Context context) {
        this.sharedPreferences = context.getSharedPreferences("login_session",
                Context.MODE_PRIVATE);
        this.context = context;
    }
    public String getSt_id() {
        return sharedPreferences.getString(st_id, "");
    }
    public String getName() {
        return sharedPreferences.getString(name, "");
    }

    public String getImg() {
        return sharedPreferences.getString(img, "");
    }
    public void setImg(String img) {
        SharedPreferences.Editor edit = sharedPreferences.edit();
        edit.putString(this.img, img);
        edit.commit();
    }
    public void setName(String name) {
        SharedPreferences.Editor edit = sharedPreferences.edit();
        edit.putString(this.name, name);
        edit.commit();
    }
    public void setSt_id(String st_id) {
        SharedPreferences.Editor edit = sharedPreferences.edit();
        edit.putString(this.st_id, st_id);
        edit.commit();
    }

}