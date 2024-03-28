package com.example.fms;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class paid_adapter extends RecyclerView.Adapter<paid_adapter.ViewHolder>{
    public paid[] data;

    public paid_adapter(paid[] data){
        this.data = data;
    }
    @NonNull
    @Override
    public paid_adapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater lf = LayoutInflater.from(parent.getContext());
        View view = lf.inflate(R.layout.listview2,parent,false);
        ViewHolder viewholder =  new ViewHolder(view);

        return viewholder;
    }

    @Override
    public void onBindViewHolder(@NonNull paid_adapter.ViewHolder holder, int position) {
        holder.amount.setText(data[position].getAmount());
        holder.date.setText(data[position].getDate());
        holder.fees_name.setText(data[position].getFees_name());

    }


    @Override
    public int getItemCount() {
        return data.length;
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        public TextView amount;
        public TextView date;
        public TextView fees_name;
        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            this.amount = itemView.findViewById(R.id.amount);
            this.date = itemView.findViewById(R.id.date);
            this.fees_name = itemView.findViewById(R.id.fees_name);
        }
    }
}
