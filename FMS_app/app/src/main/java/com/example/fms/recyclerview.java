package com.example.fms;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

public class recyclerview extends AppCompatActivity {
  RecyclerView recyclerView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recyclerview);

        recyclerView = findViewById(R.id.myrecycler);
        fees[] data = new fees[]{
                new fees(1,"6000","1-2-23","Anas"),
                new fees(2,"7000","2-3-23","Adeen"),
                new fees(3,"8000","3-4-23","Fahad")
        };
        adapter fees_adapter = new adapter(data,recyclerview.this);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setAdapter(fees_adapter);
    }
}